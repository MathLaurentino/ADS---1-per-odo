import java.io.BufferedReader;
import java.io.FileReader;

public class LeituraArquivo {

    public static void main(String[] args) throws Exception{
        
        String nomeArquivo = "ArquivoEntrada.csv";

        BufferedReader readerFile = new BufferedReader(
            new FileReader(nomeArquivo));

        String linha;
        while ((linha = readerFile.readLine()) != null) {
            System.out.println(linha);
        }
        readerFile.close();
    }
    
}
