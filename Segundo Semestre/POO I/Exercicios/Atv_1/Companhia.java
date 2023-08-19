import java.util.ArrayList;

public class Companhia {

    private String nome;       
    private int quantidadeVoos;
    private Voo[] voos;
    
    // Construtor
    public Companhia() {
        this.quantidadeVoos = 0;
        this.voos = new Voo[40];
    }


    // Getters and Setters
    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
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
