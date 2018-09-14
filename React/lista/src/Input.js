import React, { Component } from 'react';

class Input extends React.Component {
    render() {
      return (
        <div>
            <input onChange={this.props.onChange}/>
        </div>
      )
    }
  }

export default Input;