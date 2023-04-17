/* *******************************************************************
 * Colegio Técnico Antônio Teixeira Fernandes (Univap)
 * Curso Técnico em Informática - Data de Entrega: 28/05/2022
 * Autores do Projeto: Rafael Giordano Matesco  50210686
 *                     	Arthur Henrique Castro Miranda 50210117
 * Turma: 2H
 * Atividade Proposta em aula
 * Observação: <colocar se houver>
 * 
 * forms.cs
 * ************************************************************/

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace projeto_2bim
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        double acumula = 0;
        string operacao = "";
        private void textBox1_TextChanged(object sender, EventArgs e){}

        private void button1_Click(object sender, EventArgs e)
        {
            textBox1.Text += "1";

        }

        private void button2_Click(object sender, EventArgs e)
        {
            textBox1.Text += "2";

        }

        private void button3_Click(object sender, EventArgs e)
        {
            textBox1.Text += "3";

        }

        private void button4_Click(object sender, EventArgs e)
        {
            textBox1.Text += "4";

        }

        private void button5_Click(object sender, EventArgs e)
        {
            textBox1.Text += "5";

        }

        private void button6_Click(object sender, EventArgs e)
        {
            textBox1.Text += "6";

        }

        private void button7_Click(object sender, EventArgs e)
        {
            textBox1.Text += "7";

        }

        private void button8_Click(object sender, EventArgs e)
        {
            textBox1.Text += "8";

        }

        private void button9_Click(object sender, EventArgs e)
        {
            textBox1.Text += "9";

        }

        private void button10_Click(object sender, EventArgs e)
        {
            textBox1.Text += "0";

        }

        private void button11_Click(object sender, EventArgs e)
        {
            //ADICAO
            if (operacao == "*" || operacao == "-" || operacao == "/")
            {
                acumula += double.Parse(textBox1.Text);
                textBox1.Text = "";
                operacao = "+";
            }
            else
            {
                acumula += double.Parse(textBox1.Text);
                textBox1.Text = "";
                operacao = "+";
            }
        }

        private void button12_Click(object sender, EventArgs e)
        {
            //subtracao
            if (operacao == "*" || operacao == "+" || operacao == "/")
            {
                acumula = double.Parse(textBox1.Text);
                textBox1.Text = "";
                operacao = "-";
            }
            else
            {
                acumula = double.Parse(textBox1.Text);
                textBox1.Text = "";
                operacao = "-";
            }
        }

        private void button13_Click(object sender, EventArgs e)
        {
            //multiplicacao
            if (operacao == "-" || operacao == "+" || operacao == "/")
            {
                acumula = double.Parse(textBox1.Text);
                textBox1.Text = "";
                operacao = "*";
            }
            else
            {
                acumula = double.Parse(textBox1.Text);
                textBox1.Text = "";
                operacao = "*";
            }
        }

        private void button14_Click(object sender, EventArgs e)
        {
            //divisao
            if (operacao == "*" || operacao == "+" || operacao == "-")
            {
                acumula = double.Parse(textBox1.Text);
                textBox1.Text = "";
                operacao = "/";
            }
            else
            {
                acumula = double.Parse(textBox1.Text);
                textBox1.Text = "";
                operacao = "/";
            }
        }

        private void button15_Click(object sender, EventArgs e)
        {
            //igual
            if (operacao == "+")
            {
                acumula += double.Parse(textBox1.Text);
                textBox1.Text = acumula.ToString();
            }
            else if (operacao == "-")
            {
                acumula -= double.Parse(textBox1.Text);
                textBox1.Text = acumula.ToString();
            }
            else if (operacao == "*")
            {
                acumula *= double.Parse(textBox1.Text);
                textBox1.Text = acumula.ToString();
            }
            else if (operacao == "/")
            {
                if (double.Parse(textBox1.Text) != 0)
                {
                    acumula /= double.Parse(textBox1.Text);
                    textBox1.Text = acumula.ToString();
                }
                else
                {
                    textBox1.Text = "Divisao por zero";
                }
            }else if (operacao == "^")
            {
                double x = acumula;
                for(int y = 1; y < double.Parse(textBox1.Text); y++)
                {
                    acumula *= x;
                }
                textBox1.Text = acumula.ToString();
            }else if(operacao == "raizQ")
            {
                double y = double.Parse(textBox1.Text);
                raizQ = Math.Pow(raizQ, 1.0 / y);

                textBox1.Text = raizQ.ToString();
            }

        }

        private void button16_Click(object sender, EventArgs e)
        {
            //VIRGULA
            textBox1.Text += ",";
        }

        private void button17_Click(object sender, EventArgs e)
        {
            //SETINHA
            int x = textBox1.Text.Length - 1;
            if (x >= 0)
            {
                textBox1.Text = textBox1.Text.Substring(0, x);
            }
        }

        private void button18_Click(object sender, EventArgs e)
        {
            //CE
            textBox1.Text = "";
            operacao = "";
        }

        private void button19_Click(object sender, EventArgs e)
        {
            //C
            acumula = 0;
            textBox1.Text = "";
        }

        private void button33_Click(object sender, EventArgs e)
        {
            //SQRT
            double x = double.Parse(textBox1.Text);
            if (x < 0)
            {
                textBox1.Text = "Este valor não é valido.";
            }
            else
            {
                x = Math.Sqrt(x);
                textBox1.Text = x.ToString();
            }
        }

        private void button22_Click(object sender, EventArgs e)
        {
            //POTENCIA QUADRADO
            double x = double.Parse(textBox1.Text);
            x *= x;
            textBox1.Text = x.ToString();

        }

        private void button29_Click(object sender, EventArgs e)
        {
            //POTENCIA QLQR EXPOENTE
            acumula = double.Parse(textBox1.Text);
            textBox1.Text = "";
            operacao = "^";
        }

        private void button30_Click(object sender, EventArgs e)
        {
            //POTENCIA CUBO
            double x = double.Parse(textBox1.Text);
            x = x*x*x;
            textBox1.Text = x.ToString();
        }

        private void button28_Click(object sender, EventArgs e)
        {
            //expoente com  base  10 
            double num = double.Parse(textBox1.Text);
            num = Math.Pow(10, num);
            textBox1.Text = num.ToString();
        }

        private void button21_Click(object sender, EventArgs e)
        {
            double numero = double.Parse(textBox1.Text);
            double resultado = 1;
            while (numero != 1)
            {
                resultado = resultado * numero;
                numero = numero - 1;
            }
            textBox1.Text = resultado.ToString();
        }

        private void button20_Click(object sender, EventArgs e)
        {

        }

        private void button35_Click(object sender, EventArgs e)
        {

        }

        private void button34_Click(object sender, EventArgs e)
        {

        }

        private void button32_Click(object sender, EventArgs e)
        {
            //raiz cubica
            double x = double.Parse(textBox1.Text);
            x = Math.Pow(x, 1.0/3.0);

            textBox1.Text = x.ToString();

        }

        double raizQ = 0;
        private void button31_Click(object sender, EventArgs e)
        {
            //raiz qualquer
            operacao = "raizQ"; 
            raizQ = double.Parse(textBox1.Text);
            textBox1.Text = "";
        }

        private void button36_Click(object sender, EventArgs e)
        {
            double pi = Math.PI;
            textBox1.Text = pi.ToString(); 
        }
    }
}