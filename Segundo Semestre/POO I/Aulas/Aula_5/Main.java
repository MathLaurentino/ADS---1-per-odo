package Aula_5;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.text.DecimalFormat;

public class Main {
    public static void main(String[] args) throws Exception{
        String csvFile = "vendas.csv"; 
        String line;

        int quantidadeVendas = 0;
        double valorTotalVendas = 0;
        double valorTotalAVista = 0;
        double valorTotalAPrazo = 0;

        BufferedReader readerFile = new BufferedReader(new FileReader(csvFile));
        readerFile.readLine();

        while ((line = readerFile.readLine()) != null) {

            String[] venda = line.split(";");
            String tipoPagto = venda[3];

            quantidadeVendas++;
            double valorVenda = Double.parseDouble(venda[2].replace(",", "."));
            
            valorTotalVendas += valorVenda;

            if (tipoPagto.equals("V")) {
                valorTotalAVista += valorVenda;
            } else if (tipoPagto.equals("P")) {
                valorTotalAPrazo += valorVenda;
            }
        }

        DecimalFormat df = new DecimalFormat("#.00");
        System.out.println("Quantidade de vendas realizadas: " + df.format(quantidadeVendas));
        System.out.println("Valor total das vendas: " + df.format(valorTotalVendas));
        System.out.println("Valor total das vendas à vista: " + df.format(valorTotalAVista));
        System.out.println("Valor total das vendas à prazo: " + df.format(valorTotalAPrazo));

    }
}
