public class Passageiro {
    private String nome;
    private String sobrenome;
    private int idade;
    private int numeroPassaporte;

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

    public int getNumeroPassaporte() {
        return numeroPassaporte;
    }
    public void setNumeroPassaporte(int numeroPassaporte) {
        this.numeroPassaporte = numeroPassaporte;
    }

    // Método para exibir informações do passageiro
    public String toString() {
        return "Nome: " + nome + " " + sobrenome + 
               "Idade: " + idade + 
               "Número do Passaporte: " + numeroPassaporte;
    }

}