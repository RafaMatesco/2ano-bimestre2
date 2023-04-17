from flask import Flask
from flask import request
from flask import render_template

app = Flask(__name__)


@app.route('/1flask.html')
def inicial():
    if request.args.get('salBruto') is None:
        return render_template('1flask.html')
    if request.args.get('valHoraExtra') is None:
        return render_template('1flask.html')
    if request.args.get('horasExtras') is None:
        return render_template('1flask.html')
    salBruto = float(request.args.get('salBruto'))
    valHoraExtra = float(request.args.get('valHoraExtra'))
    horasExtras = float(request.args.get('horasExtras'))
    salLiquido = salBruto + (valHoraExtra * horasExtras)
    salLiquido = salLiquido - (salLiquido * 0.08)
    return render_template('1flasks.html', res=salLiquido)