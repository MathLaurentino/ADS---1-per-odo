import java.io.BufferedWriter;
import java.io.FileWriter;

public class EscritaArquivo {
    
    public static void main(String[] args) throws Exception{
        
        String nomeArqSaida = "ArquivoSaida.csv";

        BufferedWriter whiterFile = new BufferedWriter(
            new FileWriter(nomeArqSaida));

        String linha = "Produto;Preço;Estoque";
        whiterFile.write(linha);
        whiterFile.newLine();

        linha = "Caneta;123,12;5";
        whiterFile.write(linha);
        whiterFile.newLine();

        linha = "Mouse;100;40";
        whiterFile.write(linha);

        whiterFile.close();

    }

}
