import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.InputStreamReader;
import java.text.DecimalFormat;

public class main {

    BufferedReader reader;
    BufferedReader readerFile;

    String nomeArquivoEntrada;
    String nomeArquivoSaida;

    DecimalFormat df;


    public static void main(String[] args) {
        
        Main main = new Main();
        main.reader = new BufferedReader(new InputStreamReader(System.in));

        main.readerFile = new BufferedReader(new FileReader("./files/" + main.nomeArquivoEntrada + ".csv"));

    }

    private void menu() throws Exception {
  

    }

}