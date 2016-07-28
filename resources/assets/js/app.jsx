import React from 'react'
import ReactDom from 'react-dom'

Window.App = {
    render: () => {
        ReactDom.render(
            <div />,
            document.getElementById('root')
        )
    }
}
