// How to add any React Component to be usable in Twig templates as '<app-*></app-*>' HTML tag.
// -> Replace 'MyModel' with the name of your model in the examples below

// 1. import the component
// import TableMyModel from "./Components/TableMyModel"

// 2. Register the React Component into Hubleto framework
// globalThis.main.registerReactComponent('IpInfoTestTableMyModel', TableMyModel);

// 3. Use the component in any of your Twig views:
// <app-ipinfotest-table-my-model string:some-property="some-value"></app-ipinfotest-table-my-model>

//@hubleto-cli:imports
// import HubletoApp from '@hubleto/react-ui/ext/HubletoApp';
import TableInfo from "./Components/TableInfo"

//@hubleto-cli:register-components
globalThis.main.registerReactComponent('IpInfoTestTableInfo', TableInfo);

// class IpInfoTestApp extends HubletoApp {
// init() {
// super.init();


// }
// }

// globalThis.main.registerApp('Hubleto/App/Custom/IpInfoTest', new IpInfoTestApp());
