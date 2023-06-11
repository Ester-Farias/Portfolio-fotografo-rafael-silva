#Importação das bibliotecas e pacotes
from flask import Flask, render_template, request, redirect, url_for
import sqlite3

app = Flask(__name__)

#Rota para a página inicial
@app.route('/')
def index():
    return render_template('index.html')

#Rota para o formulário
@app.route('/formulario', methods=['POST'])
def formulario():
        #Verificar se o método é POST
        if request.method == 'POST':
              #Obter os dados do formulário
              nome = request.form['nome']
              email = request.form['email']
              message = request.form['message']
              #Conectar ao banco de dados
              conn = sqlite3.connect('formrafael.db')
              cursor = conn.cursor()
              #Executar operações no banco de dados(inserção)
              cursor.execute('INSERT INTO usuarios (nome, email, message) VALUES (?, ?, ?)',
                           (nome, email, message))
              #Salvar as alterações e fechar a conexão
              conn.commit()
              conn.close()

              return render_template('index.html', success='True')
        else:
              #Método não permitido
              return 'Método não permitido!'
        
if __name__ == '__main__':
      app.run(debug=True)