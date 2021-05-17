import React, { Component } from 'react';
import { 
  Container, 
  Header, 
  Title, 
  Content, 
  Button, 
  Left,
  Right,
  Body,
  Icon,
  Text,
  ListItem,
  Thumbnail,
  Item,
  Input
} from 'native-base';
let helperArray=require('./userList.json');
export default class App extends Component {
  constructor(props){
    super(props)
    this.state = {
      allUsers: helperArray,
      usersFiltered:helperArray
    }
  }

  // Syntax to search a spesific users
  searchUser(textToSearch){
    this.setState({
      usersFiltered:this.state.allUsers.filter(i=>
      i.name.toLowerCase().includes(textToSearch.toLowerCase()),
      ),
    });
  }

  render() {
    return (
      <Container>
        <Header searchBar rounded>
          <Item>
            <Icon name='search'/>
            <Input placeholder='Search User' onChangeText={text=>{this.searchUser(text)}}/>
          </Item>
        </Header>
        <Content>
          {this.state.usersFiltered.map((item, index) => (
            <ListItem avatar>
              <Left>
                <Thumbnail source={{url: 'item.image'}} />
              </Left>
              <Body>
                <Text>{item.name}</Text>
                <Text>{item.username}</Text>
              </Body>
              <Right/>
            </ListItem>
          ))}  
        </Content>
        
      </Container>
    );
  }
}