import React, { Component } from 'react';

class Botao extends React.Component {
    render() {
      return (
        <div>
            <button onClick={this.props.onClick}>
            {this.props.title}
            </button>
        </div>
      )
    }
  }

  export default Botao;