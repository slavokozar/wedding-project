import * as React from 'react';
import { ReactMultiEmail, isEmail } from 'react-multi-email';
import 'react-multi-email/dist/style.css';

function Email({emails, setEmails}) {
    return (
        <div>
            <ReactMultiEmail
                placeholder='Zadajte prosím emailovú adresu'
                emails={emails}
                onChange={(_emails) => {
                    setEmails(_emails);
                }}
                autoFocus={true}
                // onFocus={() => setFocused(true)}
                // onBlur={() => setFocused(false)}
                getLabel={(email, index, removeEmail) => {
                    return (
                        <div data-tag key={index}>
                            <div data-tag-item>{email}</div>
                            <span data-tag-handle onClick={() => removeEmail(index)}>×</span>
                        </div>
                    );
                }}
            />

            {/*<p>{emails.join(', ') || 'empty'}</p>*/}
        </div>
    );
}

export default Email;
