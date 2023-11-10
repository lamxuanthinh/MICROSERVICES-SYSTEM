from flask import Flask
app = Flask(__name__)

@app.route('/users')
def hello():
	return "Welcome Services User With Python and MySQL!"


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=3517)