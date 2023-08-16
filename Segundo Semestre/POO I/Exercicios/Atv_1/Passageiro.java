public class Passageiro {
    private String nome;
    private String sobrenome;
    private int idade;
    private String numeroPassaporte;

    // Construtor
    public Passageiro(String nome, String sobrenome, int idade, String numeroPassaporte) {
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.idade = idade;
        this.numeroPassaporte = numeroPassaporte;
    }

    // Getters e Setters
    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getSobrenome() {
        return sobrenome;
    }
    public void setSobrenome(String sobrenome) {
        this.sobrenome = sobrenome;
    }

    public int getIdade() {
        return idade;
    }
    public void setIdade(int idade) {
        this.idade = idade;
    }

    public String getNumeroPassaporte() {
        return numeroPassaporte;
    }
    public void setNumeroPassaporte(String numeroPassaporte) {
        this.numeroPassaporte = numeroPassaporte;
    }

    // Método para exibir informações do passageiro
    public String toString() {
        return "Nome: " + nome + " " + sobrenome + 
               "Idade: " + idade + 
               "Número do Passaporte: " + numeroPassaporte;
    }

}