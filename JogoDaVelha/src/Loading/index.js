import React, { Component } from 'react';
import Spinner from 'react-bootstrap/Spinner';


export default class Loading extends Component {
    constructor(props) {
        super(props);

        this.state = {
            visible: true // this.props.visible, /* true or false */
        }

        window.onload = () => {
            setTimeout(() => {
                this.setState({ visible:!this.state.visible })
            }, 1000);
        }
    }

    render() {
        return (
            <div style={{ background: "white", zIndex: 1000 }} className={ this.state.visible ? "w-100 h-100 position-absolute d-flex justify-content-center align-items-center" : "w-0 h-0" }>

                <Spinner 
                    animation={ this.state.visible ? "border" : "none" } 
                    role="switch"
                    style={{
                        width: "50px",
                        height: "50px"
                    }}
                />

            </div>
        )
    }
}