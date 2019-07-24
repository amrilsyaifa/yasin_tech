import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Contact extends Component {
	render() {
		return <div>Contact</div>;
	}
}

if (document.getElementById('contactReact')) {
	ReactDOM.render(<Contact />, document.getElementById('contactReact'));
}
