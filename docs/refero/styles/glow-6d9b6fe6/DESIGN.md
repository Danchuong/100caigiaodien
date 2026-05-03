# Glow — Refero Style

- Refero URL: https://styles.refero.design/style/6d9b6fe6-51f4-4978-82dd-a791c28db5cf
- Site URL: https://glow.app
- ID: 6d9b6fe6-51f4-4978-82dd-a791c28db5cf
- Theme: light
- Industry: fintech
- Created: 2026-04-30T02:03:51.260Z
- Ranks: newest: 454, popular: 503, trending: 304

> Vibrant crypto gradient on clean canvas

## Description

Glow embraces a 'Solana future' aesthetic: clean, spacious interfaces with a vibrant gradient accent that hints at digital energy. The design uses a dominant neutral canvas to ground the playful purple-pink-orange color narrative, focusing attention on key actions and glowing interactive states. Typography is confident and impactful, balancing heavy headlines with readable body text, while generous spacing ensures content breathes and feels light.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ghost Ink | #131517 | neutral | Primary text, headings, dark icons, borders |
| Cloud Canvas | #f4f5f6 | neutral | Page backgrounds, elevated card surfaces |
| Snowdrift | #ffffff | neutral | Foreground elements, button text, badges |
| Stone Gray | #737577 | neutral | Muted text, secondary icons, subtle borders |
| Soft Sterling | #b3b5b7 | neutral | Placeholder text, inactive state borders |
| Carbon | #333537 | neutral | Secondary button backgrounds, dark UI elements |
| Solana Grape | #cc62d5 | brand | Primary action buttons, active links, interactive elements — a vivid purple that signifies activation |
| Alert Red | #e83b47 | accent | Red wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Use as a supporting accent, not as a status color |
| Highlight Orange | #ec660d | accent | New feature badges, inline alerts, and decorative accents |
| Glow Gradient | #a732d6 | brand | Decorative background element, brand identity visual |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roobert | Inter | 400, 500, 600, 700 | 12px, 13px, 16px, 18px, 24px, 40px, 56px | 1.00, 1.10, 1.17, 1.20, 1.28, 1.50 | Primary brand typeface for all text. Its unique character delivers a modern, almost technical feel. Weight 700 is used for impactful headlines, while 400 maintains readability in body copy. |
| -apple-system |  | 400 | 16px | 1.5 | -apple-system — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0.99 |
| body | 16 | 1.28 |  |
| subheading | 18 | 1.28 |  |
| heading | 24 | 1.17 | -0.43 |
| heading-lg | 40 | 1.1 | -0.72 |
| display | 56 | 1 | -1 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "40px",
    "icons": "100px",
    "badges": "4px",
    "buttons": "19px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Filled button

Solid `Solana Grape` background (#cc62d5) with `Snowdrift` (#ffffff) text, rounded corners of 19px, and generous horizontal padding (14px). Used for primary calls to action like 'Get Browser Extension'.

### Secondary Action Button

**Role:** Filled button

Solid `Carbon` (#333537) background with `Snowdrift` (#ffffff) text, rounded corners of 19px, and generous horizontal padding (14px). Used for secondary calls to action like 'Get for iOS'.

### Feature Card

**Role:** Informational display

Large `Cloud Canvas` (#f4f5f6) background card with a dramatically rounded 40px border radius, typically used for showcasing product features. No internal padding is specified; content flows to the edges.

### Badge (New)

**Role:** Status indicator

`Highlight Orange` (#ec660d) background with `Snowdrift` (#ffffff) text, small 4px border radius, and tight 2px vertical, 8px horizontal padding. Used to indicate new features or important states.

## Do's

- Use `Solana Grape` (#cc62d5) exclusively for primary interactive elements, ensuring every click feels significant.
- Apply `Roobert` with a 700 weight and `Ghost Ink` (#131517) for all main headlines to convey clarity and impact.
- Maintain a clear hierarchy of surfaces: `Snowdrift` (#ffffff) for foreground, `Cloud Canvas` (#f4f5f6) for elevated backgrounds.
- Ensure generous `40px` vertical spacing between major sections for comfortable scanning and visual breathing room.
- Pad interactive elements like buttons and badges with at least `10px` vertical and `14px` horizontal padding, maintaining a `19px` border radius.
- Utilize the `Glow Gradient` for decorative brand elements only, never for functional UI components.

## Don'ts

- Avoid using `Highlight Orange` (#ec660d) or `Alert Red` (#e83b47) for general UI backgrounds; reserve them for specific semantic alerts or decorative accents.
- Do not introduce additional font families; `Roobert` is the sole brand typeface.
- Refrain from using strong shadows; the design relies on flat layers and subtle transitions, not deep elevation.
- Do not deviate from the established `40px` radius for cards and `19px` for buttons; consistency in shape defines component identity.
- Avoid dense information blocks; instead, use the `8px` `elementGap` and clear typography to create spacious layouts.

## Layout

The page primarily employs a max-width contained layout, though the hero section extends full-bleed across the screen with a light background and a left-aligned content block. Sections alternate between a prominent heading and explanatory text, often paired with product screenshots on the opposite side (text-left, image-right, then text-right, image-left). Vertical rhythm is established through consistent `40px` section gaps. Call-to-action buttons are clustered together. Feature showcases utilize card grids, while footer links are minimal and left-aligned. The overall density is comfortable, with ample white space around content blocks, creating an open and airy feel.

## Imagery

The site predominantly uses product screenshots of the Glow wallet interface, presented on stark white or lightly textured surfaces. These are cleanly cropped and isolated, focusing on the UI in action rather than lifestyle. Abstract 3D elements, often in 'Solana Grape' or similar gradient hues (#cc62d5 gradient), float around the screenshots, acting as decorative accents without obscuring the product. Iconography is simple, outlined, and uses the neutral palette with occasional brand color fills for emphasis. The visual language emphasizes product functionality and a modern, slightly playful tech aesthetic over hyper-realistic or human-centric photography.

## Similar Brands

| Business | Why |
| --- | --- |
| Rainbow Wallet | Vibrant, single-color brand accent against a clean, light UI background in the crypto space. |
| Phantom Wallet | Uses a similar confident, modern sans-serif typeface and a focus on clean product UI with minimal ornamentation. |
| Linear | Strict adherence to a well-defined type scale, subtle use of neutrals, and a single accent color for primary actions. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #131517
- background: #f4f5f6
- border: #b3b5b7
- accent: #ec660d
- primary action: #cc62d5 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #cc62d5 background, #131517 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a feature card: `Cloud Canvas` (#f4f5f6) background, 40px radius. Inside, use a `heading` (24px `Roobert` 700, `Ghost Ink` #131517, letter-spacing -0.43px) for the feature title, and `body` text (16px `Roobert` 400, `Ghost Ink` #131517) for the description.
3. Design a 'New' badge: `Highlight Orange` (#ec660d) background with `Snowdrift` (#ffffff) text, 4px radius, 2px 8px padding, using 12px `Roobert` 500.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514610102-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514610102-thumb.jpg |
