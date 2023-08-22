import java.util.ArrayList;

public class Companhia {
     
    private int quantidadeVoos;
    private Voo[] voos;
    
    // Construtor
    public Companhia() {
        this.quantidadeVoos = 0;
        this.voos = new Voo[40];
    }
    
    public Voo getVoo(int pos){
        return this.voos[pos];
    }
    public void setVoo(Voo a){
        if (this.quantidadeVoos < 40) {
            this.voos[this.quantidadeVoos] = a;
            this.quantidadeVoos++;
        }
    }

    public int getQtdeVoo(){
        return this.quantidadeVoos;
    }
}
