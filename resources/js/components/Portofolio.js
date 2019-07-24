import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Portofolio extends Component {
	render() {
		return <div>Harus</div>;
	}
}

if (document.getElementById('portofolioReact')) {
	ReactDOM.render(<Portofolio />, document.getElementById('portofolioReact'));
}
