import React, { Component } from "react";
import { Card, Container } from "react-bootstrap";
import './App.css';

function getWindowWidth() {
  return window.innerWidth;
}

function getWindowHeight() {
  return window.innerHeight;
}

function getScreenWidth() {
  return window.screen.width;
}

function getScreenHeight() {
  return window.screen.height;
}



class App extends Component {
  constructor(props) {
    super(props);

    this.state = {
      windowWidth: getWindowWidth(),
      windowHeight: getWindowHeight(),
      screenWidth: getScreenWidth(),
      screenHeight: getScreenHeight()
    }

    window.addEventListener('resize', () => {
      this.update_sizes();
    })
  }

  update_sizes() {
    const window_width = getWindowWidth();
    const window_height = getWindowHeight();
    const screen_width = getScreenWidth();
    const screen_height = getScreenHeight();

    this.setState({
      windowWidth: window_width,
      windowHeight: window_height,
      screenWidth: screen_width,
      screenHeight: screen_height
    });

  }

  render() {
    return (
      <Container className="App w-75 h-75 d-flex flex-column justify-content-evenly align-items-strecth">

        <Card className="container-size window d-flex flex-column">
          <Card.Title className="title text-muted"> Window </Card.Title>

          <Card.Body className="container">
            <div className="size width">
              <Card.Text className="text">Width - {this.state.windowWidth}px</Card.Text>
            </div>

            <div className="size height">
              <Card.Text className="text">Height - {this.state.windowHeight}px</Card.Text>
            </div>
          </Card.Body>
        </Card>

        <Card className="container-size screen">
          <Card.Title className="title text-muted"> Screen </Card.Title>

          <Card.Body className="container">
            <div className="size width">
              <Card.Text className="text">Width - {this.state.screenWidth}px</Card.Text>
            </div>

            <div className="size height">
              <Card.Text className="text">Height - {this.state.screenHeight}px</Card.Text>
            </div>
          </Card.Body>
        </Card>

      </Container>
    );  
  }
}

export default App;
