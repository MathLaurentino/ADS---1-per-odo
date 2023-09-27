import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;

public class VerificadorDeArquivo {

    public static boolean verificarSeArquivoExiste(String caminhoDoArquivo) {
        Path path = Paths.get(caminhoDoArquivo);

        if (Files.exists(path)) {
            return true;
        } else {
            return false;
        }

    }

}
