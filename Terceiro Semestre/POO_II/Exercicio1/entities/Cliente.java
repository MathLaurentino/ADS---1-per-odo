package entities;

import java.util.ArrayList;
import java.util.List;

public class Cliente {

    private String nome;
    private String email;
    private List<Float> orcamentos;


    public Cliente(String nome, String email) {
        this.nome = nome;
        this.email = email;
        this.orcamentos = new ArrayList<>();
    }
    public Cliente() {
        this.orcamentos = new ArrayList<>();
    }


    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getEmail() {
        return email;
    }
    public void setEmail(String email) {
        this.email = email;
    }

    public List<Float> getOrcamentos() {
        return orcamentos;
    }
    public void addOrcamento(Float orcamento) {
        this.orcamentos.add(orcamento);
    }
}