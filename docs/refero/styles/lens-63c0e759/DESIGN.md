# Lens — Refero Style

- Refero URL: https://styles.refero.design/style/63c0e759-3175-4f62-a8e3-b9e285f9e998
- Site URL: https://lens.xyz
- ID: 63c0e759-3175-4f62-a8e3-b9e285f9e998
- Theme: light
- Industry: crypto
- Created: 2026-04-30T00:33:35.898Z
- Ranks: newest: 764, popular: 790, trending: 588

> Cloud-white digital canvas

## Description

Lens employs a bright, airy canvas with subtle surface treatments and an almost-monochrome palette. A vivid teal and soft, playful gradients provide functional accents without overpowering the clean structure. Typography is precise and airy, creating a sense of clarity and modern efficiency. Components are lightweight with generous padding and soft, rounded edges, emphasizing user-friendliness and approachability within a sophisticated technical context.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Lens Teal | #00caa0 | brand | Primary brand accent, interactive elements like buttons and active nav items, highlighting key actions. Its vividness cuts through the subdued neutrals |
| Mint Green | #00d743 | accent | Decorative fill for SVG icons and illustrations, adding a fresh, energetic touch |
| Charcoal Black | #2c2d30 | neutral | Primary text color for headings, body copy, and icons, ensuring high contrast on light backgrounds |
| Cool Gray | #afafaf | neutral | Secondary text for subtle descriptions, placeholder text, and borders for ghost buttons and input fields |
| White Canvas | #ffffff | neutral | Main page and card backgrounds, providing a clean, expansive foundation |
| Slate Subtle | #808183 | neutral | Muted helper text, delicate dividers, and very subtle icon fills |
| Light Steel | #c0c0c1 | neutral | Hairline borders and very light graphical elements, barely visible against the white |
| Subtle Card Bkg | #fbfcff | neutral | Card backgrounds, almost white but providing a faint distinction from the main canvas without introducing heavy contrast |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| saans | system-ui | 400, 500, 600 | 16px, 21px, 26px, 28px, 46px | 1.20, 1.35, 1.40 | Primary display font for headings and prominent UI elements. Its unique character set ('ss01' feature) provides a distinctive visual signature, maintaining legibility at all sizes with consistent tracking. |
| Inter | Inter, sans-serif | 400, 500 | 14px, 15px, 16px, 18px, 20px | 0.88, 1.10, 1.20, 1.29, 1.40, 1.43, 1.45 | Workhorse font for body text, navigation, and button labels. Its negative letter spacing at larger sizes gives it a compact, modern feel while ensuring readability at smaller scales, especially with the 'cv11' feature for character variation. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.43 | -0.14 |
| body | 16 | 1.4 | 0.24 |
| subheading | 21 | 1.35 | 0.315 |
| heading-sm | 26 | 1.2 | 0.39 |
| heading | 28 | 1.2 | 0.42 |
| display | 46 | 1.2 | 0.69 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "inputs": "0px",
    "buttons": "50px",
    "navItems": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "48px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Nav Link

**Role:** Navigation button, text-only

backgroundColor=transparent, color=rgba(55,55,55,0.4), borderRadius=0px, padding=0px, font: Inter at 16px, weight 400.

### Primary Action Button

**Role:** Call to action button

backgroundColor=#00caa0, color=#ffffff, borderRadius=50px, padding=11px 24px, font: Inter at 16px, weight 500. Box shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px.

### Developer Action Button

**Role:** Secondary action button (ghost style)

backgroundColor=transparent, color=#2c2d30, borderRadius=50px, padding=11px 24px, font: Inter at 16px, weight 500. Border: 1px solid #afafaf. Box shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px.

### Informative Card

**Role:** Content container for features or details

backgroundColor=rgb(251, 251, 251), borderRadius=16px, padding=24px, font: Inter at 16px, weight 400. Box shadow: none.

### Feature Highlight Card

**Role:** Highlighted content container with iconography

backgroundColor=rgba(45, 45, 48, 0.02), borderRadius=24px, padding=32px, font: saans at 21px, weight 400. Box shadow: none.

### Circular Icon Wrapper

**Role:** Decorative background for icons

backgroundColor=rgba(40, 211, 107, 0.12), borderRadius=50%.

## Do's

- Prioritize Charcoal Black (#2c2d30) for all primary text and headings against White Canvas (#ffffff), achieving AAA contrast.
- Use Lens Teal (#00caa0) exclusively for primary interactive elements, brand accents, and active states. Do not use it for passive text or large backgrounds.
- Apply a 50px border-radius to all primary action buttons for a soft, approachable feel.
- Maintain generous internal padding on cards and buttons, using 24px for card content padding and 11px vertical padding for buttons, aligning with a comfortable density.
- Employ the 'saans' font for all headings, leveraging its unique 'ss01' feature and positive letter spacing (0.015em).
- Use subtle, soft shadows (rgba(0,0,0,0.05) 0px 0px 0px 1px) only for interactive elements, not for static cards or surfaces.

## Don'ts

- Do not use dark backgrounds for full sections; maintain the light theme with White Canvas (#ffffff) as the dominant background.
- Avoid generic system fonts; always utilize 'saans' for headings and 'Inter' for body text with their specified font features and letter spacing.
- Do not introduce strong, opaque borders on cards or primary layout elements; rely on subtle background differences or soft washes.
- Refrain from using multiple accent colors; Lens Teal (#00caa0) and Mint Green (#00d743) are the only acceptable chromatic accents.
- Do not use a narrow page width; layout should be full-bleed or extend to edge-to-edge, with content typically centered.
- Avoid heavy drop shadows or multiple shadow layers, as the design uses minimal, single-layer outlines.

## Similar Brands

| Business | Why |
| --- | --- |
| Optimism | Shares a clean, light aesthetic with a single prominent accent color for interactive elements and abstract background graphics. |
| Arbitrum | Employs an open layout, soft, abstract visuals, and a focused color palette primarily on light backgrounds. |
| Base | Exhibits a similar use of spacious white layouts, minimal UI, and soft, understated graphic elements to convey technical sophistication. |
| Zora | Features a light theme, strong typography contrast, and subtle, playful graphical elements integrated with clear content blocks. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #2c2d30
background: #ffffff
border: #afafaf
accent: #00caa0
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.

Create an Informative Card: background rgb(251, 251, 251), 16px border-radius, 24px padding. Headline text (saans weight 500, 26px, Charcoal Black). Body text (Inter weight 400, 16px, Charcoal Black).

Create a Feature Highlight Card: background rgba(45, 45, 48, 0.02), 24px border-radius, 32px padding, no shadow. Include a Circular Icon Wrapper (#00d743 with 12% opacity, 50% border-radius) containing a simple icon (Charcoal Black fill).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509188484-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509188484-thumb.jpg |
