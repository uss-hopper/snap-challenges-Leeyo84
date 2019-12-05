// import axios from 'axios';
//
// componentDidMount() {
// 	axios.get('https://dog.ceo/api/breeds/image/random')
// 		.then(response => {
// 			console.log(response.data);
// 		})
// 		.catch(error => {
// 			console.log(error);
// 		});
// }
//
// constructor(props) {
// 	super(props);
// 	this.state = {
// 		imageURL: '',
// 	}
// }
//
// componentDidMount() {
// 	axios.get('https://dog.ceo/api/breeds/image/random')
// 		.then(response => {
// 			this.setState({ imageURL: response.data.message });
// 		})
// 		.catch(error => {
// 			console.log(error);
// 		});
// }
//
// render() {
// 	const { imageURL } = this.state;
// 	return (
// 		<img src={imageURL} />
// 	);
// }

//pauls answer
const onPageLoad = () => {
	axios.get('https://dog.ceo/api/breeds/list/all').then(({data}) => {
		let breeds = data.message;
		let cards = '';
		for (let breed in breeds) {
			cards = cards + '<div>' + breed + '</div>';
		}
		let html = document.getElementById("target");
		html.innerHTML = cards;
		});
}