import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Botao from './Botao.js';
import Input from './Input.js';

class App extends Component {
  constructor() {
    super();

    this.state = {
      lista: []
    };
  }

  salvar(event){
    const tarefa = event.target.value;
    this.setState({
      tarefa
    })
  }

  adicionarItem(){
    const novoArray = [
      ...this.state.lista,
      this.state.tarefa
    ];
      this.setState({lista:novoArray})
  }


  render() {
    console.log(this.state)
    return (
      <div>
        <h1> To Do List </h1>
          <Input onChange={(event) => {this.salvar(event)}}/>
          <Botao onClick={() => {this.adicionarItem()}} title="Adicionar"></Botao>
          <ul>
          {
            this.state.lista.map(item => 
              <li>
                  { item }
              </li>
            )
          }
          </ul>
      </div>
    );
  }
}

export default App;
    
