import java.util.Calendar;
import java.util.GregorianCalendar;

public class ExemploCalendar {
    public static void main(String[] args) {

        Calendar agora = Calendar.getInstance();
        
        Calendar vencimento = (Calendar) agora.clone();
        
        vencimento.add(Calendar.DATE, 7); // adiciona 7 dias
        vencimento.add(Calendar.MONTH, 1); // adiciona 1 mes
        
        System.out.println("Dia agora: " + agora.get(Calendar.DATE));
        System.out.println("Dia vencimento: " + vencimento.get(Calendar.DATE) + "\n");

        GregorianCalendar data = new GregorianCalendar();
        data.set(2023, Calendar.MAY, 1);
        System.out.println(data.getTime() + "\n");


        System.out.println("Criado a partir de uma String: ");
        String dtNasc = "29/11/2003";
        String[] vetDtNasc = dtNasc.split("/");
    
    }
}
