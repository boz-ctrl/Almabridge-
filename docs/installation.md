# Installation Guide

This guide explains how to install AlmaBridge Community Edition for a self-hosted WordPress pilot.

## Requirements

- WordPress 6.x or later
- PHP 8.1 or later recommended
- HTTPS-enabled hosting
- Administrator access to WordPress
- Database backup capability
- Optional Solana wallet or service account for blockchain anchoring experiments

## Installation Steps

1. Clone or download this repository.
2. Copy the `plugin/almabridge` directory into your WordPress `wp-content/plugins/` directory.
3. In WordPress Admin, go to **Plugins**.
4. Activate **AlmaBridge Community Edition**.
5. Go to the AlmaBridge admin menu.
6. Configure issuer details, verification page settings and blockchain reference options.
7. Create a test learner and issue a test credential.
8. Use the public verification page or QR code to check the credential.

## Pilot Deployment Notes

For pilots, use non-sensitive test data. Do not issue real learner, regulated qualification or employment credentials until you have reviewed:

- Data protection basis
- Learner consent and privacy notices
- Issuer authority
- Credential revocation policy
- Cyber security controls
- Public verification risks
- Blockchain anchoring approach
- Institutional governance requirements

## Production Warning

Community Edition is provided without warranty. Production deployments should complete legal, data protection, security and quality assurance review before live use.
