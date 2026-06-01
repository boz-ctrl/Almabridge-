# AlmaBridge Community Edition

**Open-source digital credential infrastructure for trusted learning, skills and verification.**

AlmaBridge Community Edition is a self-hostable digital credential and verification platform designed for universities, colleges, training providers, employers, awarding bodies, public-sector partners and developers building trusted credential services.

It provides a practical foundation for issuing, managing and verifying portable digital credentials using a standards-aligned credential model and blockchain-based audit references. AlmaBridge is designed to support learner mobility, employer verification, institutional accountability, quality assurance and auditable evidence of learning outcomes.

## What AlmaBridge Does

- Issues digital credentials to learners, participants or professionals
- Creates public verification pages and QR-code based checks
- Records credential status, expiry and revocation
- Supports issuer and learner dashboards
- Stores blockchain transaction references for auditability
- Provides a foundation for learning outcome, skill and qualification evidence
- Enables self-hosted deployment through WordPress

## Who It Is For

AlmaBridge is intended for:

- Universities and colleges
- Awarding organisations
- Training providers
- Employers and recruiters
- Government-funded skills programmes
- Regulators and quality assurance bodies
- Developers building trusted credential services

## Community Edition

The Community Edition is free to use and self-host. It is suitable for pilots, proof-of-concept deployments, internal testing, small-scale credential issuing and developer experimentation.

Community Edition includes:

- Manual credential issuing
- Learner credential records
- Issuer dashboard
- Public credential verification
- Basic credential status management
- QR verification flow
- Blockchain transaction reference storage
- Basic local audit history
- Example credential payloads
- Starter OpenAPI specification

## Commercial Editions

Commercial editions are available for organisations requiring production-grade capabilities including:

- White-labelling
- Bulk issuing
- Moodle integration
- Issuer credit management
- Advanced credential templates
- Issuer Trust Registry
- Regulator dashboards
- ESCO skills and occupation mapping
- Verification analytics
- Assurance evidence packs
- Multi-tenant deployment
- SSO and enterprise integrations
- Managed hosting and support-backed deployment

See [`docs/commercial-editions.md`](docs/commercial-editions.md).

## Business Model

AlmaBridge uses an open-core business model. The Community Edition is open-source and self-hostable, enabling institutions and developers to test trusted digital credential issuing and verification. Commercial editions provide production-grade capabilities for scale, assurance, integrations, analytics, governance, regulatory oversight and managed service delivery.

In simple terms:

> Free to try, affordable to adopt, and commercially valuable when institutions need scale, assurance, integrations and trusted governance.

## Repository Structure

```text
almabridge/
├── README.md
├── LICENSE
├── CONTRIBUTING.md
├── CODE_OF_CONDUCT.md
├── SECURITY.md
├── CHANGELOG.md
├── ROADMAP.md
├── docs/
├── examples/
├── api/
├── plugin/
└── .github/
```

## Getting Started

1. Clone this repository.
2. Review the installation guide in [`docs/installation.md`](docs/installation.md).
3. Install the WordPress plugin from the `plugin/` directory.
4. Configure issuer settings and Solana reference settings.
5. Issue a test credential using the sample credential payload in [`examples/sample-credential.json`](examples/sample-credential.json).
6. Verify the credential using the public verification flow.

## Standards Orientation

AlmaBridge is designed to align with the direction of:

- W3C Verifiable Credentials-style data structures
- Portable digital learning records
- GDPR and data minimisation principles
- Auditability and lifecycle governance
- Skills and learning outcomes evidence
- Institutional and regulator-facing quality assurance needs

The Community Edition is a starting point. Production deployments should validate legal, data protection, regulatory, cyber security and qualification assurance requirements before live use.

## Licence

AlmaBridge Community Edition is released under the GNU Affero General Public License v3.0. Commercial licences are available for organisations requiring white-labelling, proprietary extensions, managed hosting, enterprise integration, regulatory assurance features or support-backed production deployment.

## Commercial Support

Commercial licences, implementation support and managed hosting are available from AlmaBridge.

## Status

This repository is being prepared as the public Community Edition foundation for AlmaBridge. See [`ROADMAP.md`](ROADMAP.md) for the planned development path.
