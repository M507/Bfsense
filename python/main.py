from flask import Flask, request
app = Flask(__name__)

@app.route('/', defaults={'path': ''})
@app.route('/<path:path>')
def catch_all(path):
    data = request.data
    return('You want path: %s and data: %s'.format(path, data))

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5151)

