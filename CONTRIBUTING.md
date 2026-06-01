# Contributing to AlmaBridge Community Edition

Thank you for your interest in contributing to AlmaBridge Community Edition.

AlmaBridge is intended to support trusted digital credential issuing, verification, auditability and institutional assurance. Contributions should therefore be practical, secure, standards-aware and suitable for education, employment, regulatory or public-sector environments.

## How to Contribute

You can contribute by:

- Reporting bugs
- Suggesting features
- Improving documentation
- Adding tests
- Improving accessibility
- Reviewing security assumptions
- Proposing integrations
- Improving credential lifecycle workflows

## Contribution Principles

Please keep contributions aligned with the following principles:

1. **Trust first** — credential records must be reliable, verifiable and tamper-evident.
2. **Privacy by design** — avoid unnecessary personal data and support data minimisation.
3. **Institutional usability** — workflows should work for real issuers, learners, employers and verifiers.
4. **Standards orientation** — where possible, align with recognised credential, identity, audit and interoperability standards.
5. **Clear governance** — lifecycle events such as issue, verify, suspend, revoke and expire should be auditable.
6. **Open-core clarity** — Community Edition should remain useful while commercial features can support scale, assurance and integration.

## Pull Requests

Before submitting a pull request:

- Create or reference a GitHub issue where appropriate.
- Keep changes focused.
- Include documentation updates where functionality changes.
- Avoid committing secrets, private keys, API keys or personal data.
- Include tests where possible.
- Explain the institutional or user value of the change.

## Development Standards

For WordPress-related code:

- Follow WordPress coding standards where practical.
- Use nonces and capability checks for admin actions.
- Sanitize input and escape output.
- Avoid direct database writes without clear schema and validation logic.
- Use role-based access control for issuer, learner, verifier, regulator and admin workflows.

For API-related code:

- Validate all incoming payloads.
- Avoid exposing unnecessary personal data.
- Return clear status codes and error messages.
- Log lifecycle events where appropriate.

## Security Issues

Do not open a public issue for security vulnerabilities. See [`SECURITY.md`](SECURITY.md).

## Commercial Features

Some features may be reserved for AlmaBridge Pro, Assurance or Enterprise editions. These include white-labelling, Moodle production integration, advanced analytics, issuer trust registry, regulator dashboards, ESCO mapping, multi-tenant deployment, SSO and managed hosting.

Community contributions should strengthen the open-source foundation without undermining the commercial sustainability of the platform.
