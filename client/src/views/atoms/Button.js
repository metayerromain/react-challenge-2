import React, {Component} from "react";

class Button extends Component{

    state = {
        disable: false,
    }

    render(){
        
        return(
            <button 
                className={"button-atom"}
                disabled={this.state.disable}
            > 
                This a button atom 
            </button>
        )
    }
}

export default Button;