<?php
// Conexão com o banco de dados



// Inclua as configurações de segurança no início do arquivo
session_start();

// Use HTTPS se possível
// Para fazer isso, geralmente é configurado no servidor web (por exemplo, Apache)
// para forçar o uso de HTTPS

// Defina session.cookie_httponly para true
ini_set('session.cookie_httponly', true);

// Defina session.use_only_cookies para true
ini_set('session.use_only_cookies', true);

// Defina um tempo de expiração curto para a sessão (opcional)
session_set_cookie_params(1800); // Define a sessão para expirar após 30 minutos de inatividade

// Conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=localhost;dbname=rafaelsilva_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

// Obter dados do formulário
$nome = htmlspecialchars($_POST['nome']);
$email = $_POST['email'];

// Valide o email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Lide com o erro aqui, por exemplo:
    $_SESSION['mensagem'] = "Erro: O email inserido não é válido.";
    header('Location: index.php#contato'); // Redirecione de volta para a página index.php
    exit;
}

$mensagem = $_POST['mensagem'];

// Inserir dados no banco de dados
try {
    // Selecionar o banco de dados
    $pdo->query("USE rafaelsilva_db");

    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':mensagem', $mensagem, PDO::PARAM_STR);
    $stmt->execute();
    
    // Configure a mensagem de sucesso
    $_SESSION['mensagem'] = "Mensagem enviada com sucesso!";
        
    // Redirecione de volta para a página index.php
    header('Location: index.php#contato');
    exit;
} catch (PDOException $e) {
    // Lide com erros de banco de dados
    $_SESSION['mensagem'] = "Erro ao enviar mensagem: " . $e->getMessage();
    header('Location: index.php'); // Redirecione de volta para a página index.php
    exit;
}




































/*
try {
    $pdo = new PDO("mysql:host=localhost;rafaelsilva_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

// Obter dados do formulário
$nome = htmlspecialchars($_POST['nome']);
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Email inválido, trate o erro aqui
}
$mensagem = $_POST['mensagem'];

// Inserir dados no banco de dados
try {
    // Selecionar o banco de dados
    $pdo->query("USE rafaelsilva_db");

    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':mensagem', $mensagem, PDO::PARAM_STR);
    $stmt->execute();
    echo "Mensagem enviada com sucesso!";
} catch (PDOException $e) {
    die("Erro ao enviar mensagem: " . $e->getMessage());
}*/
?>
