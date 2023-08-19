import java.io.BufferedWriter;
import java.io.FileWriter;

public class EscritaCores {
    
    public static void main(String[] args) throws Exception {
        
        
        String nomeArqSaida = "ArquivoCores.html";
        BufferedWriter whiterFile = new BufferedWriter(
            new FileWriter(nomeArqSaida));

        String header = "<html><head><title>Tabela de Cores HTML</title><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'></head><body><p>&nbsp;</p><h2 align='center'>Tabela de Cores HTML</h2><table width='400' align='center' border='1'><tr><th width='200' align='center'>Cor</th><th width='200' align='center'>Código Hexadecimal</th></tr>";
        whiterFile.write(header);
        whiterFile.newLine();

        String[] var = {"00","10","20","30","40","50","60","70","80","90","A0","B0","C0","D0","E0","F0"};

        for (int r=0; r<var.length; r++) {
            for (int g=0; g<var.length; g++) {
                for (int b=0; b<var.length; b++) {
                    String cor = var[r] + var[g] + var[b];
                    String linha = "<tr><td bgcolor='" + cor + "'><td align='center'>#" + cor + "</td></tr>";
                    whiterFile.write(linha);
                    whiterFile.newLine();
                }
            }
        }

        String footer = "</table></body></html>";
        whiterFile.write(footer);

        whiterFile.close();

    }

}
