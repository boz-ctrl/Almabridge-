# Security Policy

AlmaBridge handles credential, issuer, learner and verification workflows. Security, privacy and auditability are central to the project.

## Reporting a Vulnerability

Please do not create a public GitHub issue for suspected vulnerabilities.

Report security concerns privately to the AlmaBridge maintainers using the preferred contact route published by the project owner.

When reporting, please include:

- A clear description of the issue
- Affected component or file, if known
- Steps to reproduce
- Potential impact
- Suggested mitigation, if available

## Security Scope

Security-sensitive areas include:

- Credential issuing and verification
- Revocation and suspension workflows
- Issuer permissions and role-based access control
- Learner data handling
- API authentication and authorisation
- Blockchain transaction references
- QR code and public verification links
- Admin dashboard actions
- Audit logging
- Export and reporting functions

## Data Protection Principles

Contributors should follow these principles:

- Do not commit personal learner data.
- Do not commit private keys, seed phrases, API tokens or secrets.
- Minimise personally identifiable information in credential records.
- Use capability checks and nonces for WordPress admin actions.
- Sanitize all input and escape all output.
- Log security-relevant lifecycle events without over-collecting personal data.

## Production Use Warning

Community Edition is provided as open-source software without warranty. Organisations using AlmaBridge in production should conduct their own security, privacy, legal, regulatory and operational assurance review.

Commercial security review, deployment support and managed hosting are available through AlmaBridge commercial editions.
