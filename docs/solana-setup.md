# Solana Setup Notes

AlmaBridge Community Edition can store Solana-related references for auditability and public verification.

## What Community Edition Should Store

Community Edition may store:

- Solana mint address
- Solana transaction signature
- Blockchain network used, such as devnet or mainnet
- Timestamp of anchoring
- Local credential ID linked to the blockchain reference

## Important Note About Token Metadata

A Solana token or mint may appear as an unknown token in explorers until metadata is correctly registered. The credential record should therefore not rely only on explorer display names. AlmaBridge should store its own human-readable credential metadata locally and treat the blockchain reference as an audit or verification anchor.

## Suggested Development Approach

For pilots:

1. Use Solana devnet.
2. Issue test credentials only.
3. Record transaction signatures against local credential records.
4. Confirm verification works without requiring the verifier to understand blockchain tooling.
5. Move to mainnet only after governance, cost, privacy and operational risks are reviewed.

## Production Considerations

Before using Solana mainnet in production, review:

- Wallet custody model
- Key management
- Transaction cost model
- Metadata permanence
- Personal data avoidance
- Revocation and status design
- Explorer display behaviour
- Institutional risk appetite
- Legal and regulatory implications
