import java.util.Arrays;

public class Voo {

    private int numeroVoo;
    private String destino;
    private int quantidadePassageiros;
    private Passageiro[] passageiros;
    

    // Construtor
    public Voo() {
        this.quantidadePassageiros = 0;
        this.passageiros = new Passageiro[40];
    }

    // Getters and Setters
    public int getNumeroVoo() {
        return numeroVoo;
    }
    public void setNumeroVoo(int numeroVoo) {
        this.numeroVoo = numeroVoo;
    }

    public String getDestino() {
        return destino;
    }
    public void setDestino(String destino) {
        this.destino = destino;
    }

    public Passageiro getPassageiro(int pos){
        return this.passageiros[pos];
    }
    public void setPassageiro(Passageiro a){
        if (this.quantidadePassageiros < 40) {
            this.passageiros[this.quantidadePassageiros] = a;
            this.quantidadePassageiros++;
        }
    }

    public int getQtdePassageiro(){
        return this.quantidadePassageiros;
    }
    
    @Override
    public String toString() {
        return "Voo [numeroVoo=" + numeroVoo + ", destino=" + destino + ", quantidadePassageiros="
                + quantidadePassageiros + ", passageiros=" + Arrays.toString(passageiros) + "]";
    }
}

