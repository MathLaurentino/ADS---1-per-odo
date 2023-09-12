import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

public class ExemploDate {
    public static void main(String[] args) {

        Date agora = new Date();
        System.out.println("Agora: " + agora);
        
        SimpleDateFormat sd = new SimpleDateFormat("dd/MM/yyyy HH:mm");
        System.out.println("Agora: " + sd.format(agora));

        DateFormat df = DateFormat.getDateInstance(DateFormat.SHORT);
        System.out.println("SHORT: " + df.format(agora));

        

        
    }

}