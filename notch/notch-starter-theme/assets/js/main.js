if (module.hot) {
    module.hot.accept();
}

import Blazy from 'blazy'

import FooBar from './foobar'

let bLazy = new Blazy(),
    foobar = new FooBar();
