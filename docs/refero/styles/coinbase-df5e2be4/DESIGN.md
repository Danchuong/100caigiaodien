# Coinbase — Refero Style

- Refero URL: https://styles.refero.design/style/df5e2be4-c2bd-42bb-bbc7-409bae6355c3
- Site URL: https://coinbase.com
- ID: df5e2be4-c2bd-42bb-bbc7-409bae6355c3
- Theme: light
- Industry: crypto
- Created: 2026-03-28T15:57:16.000Z
- Ranks: newest: 985, popular: 123, trending: 287

> Digital Trust, Blueprinted. A system built on the clarity of an architectural plan, energized by a single, electric blue neuron.

## Description

The design system establishes a feeling of digital-native trust, grounded in a high-contrast, minimalist palette. A precise foundation of pure white (#ffffff) and near-black (#0a0b0d) creates an environment of clarity and focus. The system's entire personality is injected through a single, electric `Coinbase Blue` (#0052ff), which is reserved exclusively for primary actions and brand marks, acting as a confident guide. A suite of custom fonts (Coinbase Display, Sans, Text) provides a unique and cohesive typographic voice across all scales. Depth is achieved not with shadows but with bold, full-width color blocks, alternating between bright white and deep midnight sections, creating a clean, architectural rhythm.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Coinbase Blue | #0052ff | brand | Primary CTAs, logos, active states — the core brand identifier. |
| Interactive Blue | #578bfa | accent | Secondary links and interactive elements. |
| Pure White | #ffffff | neutral | Primary page background, text on dark surfaces. |
| Midnight | #0a0b0d | neutral | Dark section backgrounds, primary text. |
| Slate | #5b616 | neutral | Body text, secondary headings, footer links. |
| Ash | #8a919 | neutral | Helper text, disabled states, subtle UI text. |
| Frost | #f7f8f9 | neutral | Subtle light backgrounds, like the footer area. |
| Cloud | #eef0f3 | neutral | Light background dividers or button hover states. |
| Pewter | #dedfe2 | neutral | Borders between light sections. |
| Charcoal | #141519 | neutral | Alternative dark section background surface. |
| Positive Green | #27ad75 | semantic | Price increases, success messages. |
| Negative Red | #f0616d | semantic | Price decreases, error messages. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| CoinbaseDisplay | Manrope | 400 | 44px, 52px, 64px, 80px | 1.0-1.09 | Used exclusively for large, impactful headlines (H1/H2). Its clean, slightly wide geometry gives headlines a declarative, confident presence. |
| CoinbaseSans | Inter | 400, 600 | 13px, 16px, 18px, 20px, 28px, 36px, 64px | 1.11-1.50 | The primary workhorse font for subheadings, buttons, and some body copy. The 600 weight is used for emphasis and smaller headings. |
| CoinbaseText | Inter | 400, 700 | 13px, 16px, 18px | 1.50-1.56 | Optimized for readability in dense UI and long-form text blocks. Its generous line-height makes paragraphs breathable. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.54 |  |
| body | 16 | 1.5 |  |
| subheading | 18 | 1.56 |  |
| heading-sm | 28 | 1.25 |  |
| heading | 44 | 1.09 |  |
| heading-lg | 64 | 1 |  |
| display | 80 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "100000px",
    "cards": "24px",
    "inputs": "8px",
    "buttons": "56px"
  },
  "elementGap": "",
  "sectionGap": "",
  "cardPadding": "24px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Primary & Secondary Button Group



### Crypto Price List Card



### Earn APY Feature Banner



### Primary CTA Button

**Role:** The main call-to-action on any page.

Background: `Coinbase Blue` (#0052ff). Text: `Pure White` (#ffffff). Padding: 16px 32px. Radius: a distinctive elongated pill shape at 56px.

### Secondary Pill Button

**Role:** Secondary action, often on a dark background.

Background: `Pure White` (#ffffff). Text: `Midnight` (#0a0b0d). Padding: 12px 24px. Radius: a perfect pill shape at 100000px.

### Ghost Link

**Role:** Inline, text-style interactive elements.

Background: transparent. Text: `Interactive Blue` (#578bfa). No padding or border. Used for tertiary actions like 'Learn more'.

### Header Nav Link

**Role:** Top-level navigation items.

Background: transparent. Text: `Midnight` (#0a0b0d). No padding. Font: CoinbaseSans 16px.

### Filter Tag

**Role:** Toggleable filter in data views.

Background: typically transparent with a subtle border, or a light fill on hover/active. Text: `Slate` (#5b616e). Padding: 12px 24px. Radius: 100000px.

### Footer Link

**Role:** Tertiary navigation links in the page footer.

Background: transparent. Text: `Slate` (#5b616e). Font: CoinbaseText 16px. No underline until hover.

### Large Headline

**Role:** The primary heading for a page or hero section.

Font: CoinbaseDisplay, 64px. Color: `Midnight` (#0a0b0d).

## Do's

- Use `Coinbase Blue` (#0052ff) exclusively for primary CTAs and the brand logo.
- Define primary buttons with the signature 56px border-radius.
- Construct all major page headlines using the `CoinbaseDisplay` font.
- Create visual hierarchy by alternating full-width #ffffff and #0a0b0d sections.
- Reserve `Slate` (#5b616e) for all secondary body copy and footer links.
- Set body text at 16px with `CoinbaseSans` or `CoinbaseText` for optimal readability.
- Apply a 24px radius to all larger content cards.

## Don'ts

- Don't use shadows on any element; rely on color blocking for depth.
- Don't use `Coinbase Blue` (#0052ff) for text or non-interactive elements.
- Don't use multiple saturated colors in one section; stick to the neutral palette with one blue accent.
- Don't use sharp corners for buttons or tags; they must be rounded (56px or 100000px).
- Don't use system fonts; the custom Coinbase font suite is essential to the brand identity.
- Don't create visual dividers with lines; use negative space and background color changes.
- Don't make footer links any color other than `Slate` (#5b616e).

## Layout

The layout is a centered, max-width container (approx. 1200px) providing a stable reading experience. A key pattern is the rhythmic alternation between a white-background hero (split-column text/visual) and a full-bleed dark feature section. This creates dramatic contrast and pacing. Content is organized in simple, clear structures like 2-column feature blocks and multi-column card grids. Generous vertical spacing (64px+) between sections ensures each message has room to breathe.

## Imagery

Visuals are dominated by abstract vector illustrations and clean product UI screenshots. Illustrations use a flat-color, geometric style featuring brand colors, making complex financial concepts feel approachable and modern. They are always contained within layout blocks, reinforcing the structured, grid-based feel of the page. Photography is absent, placing the focus squarely on the product's interface and stylized brand graphics.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shared aesthetic of high-contrast typography, a single strong brand color, and a clean, developer-friendly feel. |
| Robinhood | Similar goal of simplifying finance with a clean, mobile-first design and a dominant, optimistic brand color. |
| Intercom | Uses a similar strategy of a strong blue brand color, custom illustrations, and ample white space. |
| Wealthsimple | Also combines a trustworthy-but-not-stodgy feel with clean typography and approachable graphics. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Text:** `#0a0b0d`
- **Background:** `#ffffff`
- **CTA Button:** `#0052ff`
- **Dark Section BG:** `#0a0b0d`
- **Secondary Text:** `#5b616e`
- **Link:** `#578bfa`

### Example Component Prompts
1. **Hero Section:** "Create a two-column hero on a `#ffffff` background. Left column: headline 'Hello, Spain!' at 64px CoinbaseDisplay weight 400 in `#0a0b0d`. Subtext 'Coinbase is the world's safest platform...' at 18px CoinbaseSans weight 400 in `#5b616e`. Primary button 'Sign up' with `#0052ff` background, `#ffffff` text, 16px 32px padding, and 56px border-radius."
2. **Dark Promo Section:** "Create a full-width section with a `#0a0b0d` background and 80px vertical padding. Inside, place a centered headline 'Earn up to 14% APY on your crypto' at 36px CoinbaseSans weight 600 in `#ffffff`. Add a subtext below it. Below that, add a secondary pill button 'Explore staking options' with a `#ffffff` background, `#0a0b0d` text, 12px 24px padding, and 100000px radius."
3. **Footer:** "Design a footer on a `#f7f8f9` background. Create four columns. Each column has a heading like 'Company' or 'Learn' using 16px CoinbaseSans weight 600 in `#0a0b0d`. List links below each heading like 'About' or 'Blog' using 16px CoinbaseText weight 400 in `#5b616e`."

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929370575-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929370575-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/df5e2be4-c2bd-42bb-bbc7-409bae6355c3-1777556277455-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/df5e2be4-c2bd-42bb-bbc7-409bae6355c3-1777556277455-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/df5e2be4-c2bd-42bb-bbc7-409bae6355c3-1777556277455-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/df5e2be4-c2bd-42bb-bbc7-409bae6355c3-1777556277455-preview-detail-poster.jpg |
