package Aula;
public class Main {
    
    public static void main(String[] args) {
        
        RelogioDePulso rp = new RelogioDePulso();
        rp.getHoras();


        RadioRelogio rr = new RadioRelogio();

        rr.ligar();
        rr.getHoras();
        rr.trocarEstacao(10);
        rr.desligar();

    }

}
