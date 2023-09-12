package Aula;
public class RadioRelogio implements Radio, Relogio{

    @Override
    public void desligar() {
        System.out.println("Radio desligado");        
    }

    @Override
    public void ligar() {
        System.out.println("Radio ligado");
    }

    @Override
    public void trocarEstacao(float estacao) {
        System.out.println("Mudando a frequencia para: " + estacao);        
    }

    public String getHoras() {
        return "Tarde da noite";
    }
    
}
