# MindMarket — Refero Style

- Refero URL: https://styles.refero.design/style/9130ad37-bf80-458f-b808-ac0ef6a8d1e9
- Site URL: https://mindmarket.com
- ID: 9130ad37-bf80-458f-b808-ac0ef6a8d1e9
- Theme: light
- Industry: agency
- Created: 2026-04-30T00:23:27.747Z
- Ranks: newest: 814, popular: 600, trending: 460

> Organic illustrations on calm canvas

## Description

MindMarket utilizes a playful and inviting aesthetic, combining a calm, earthy neutral palette with vibrant, illustrative accents. The design system emphasizes approachable typography, generous spacing, and organic, rounded shapes to convey a friendly yet authoritative presence. Color is used sparingly for functional highlights and to punctuate sections with energetic, brand-aligned hues. Components feel lightweight, with emphasis on soft, large radii and minimal borders.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Greige Canvas | #f5f1e4 | neutral | Soft section background, alternate surface, and quiet card fill. Do not promote it to the primary CTA color |
| Midnight Graphite | #2c2e2a | neutral | Primary text, headings, most iconography, borders for outlined elements — a deep, near-black that feels soft and modern |
| Clean White | #ffffff | neutral | Primary page canvas and white card surfaces. Do not promote it to the primary CTA color |
| Muted Stone | #e0dbce | neutral | Subtle secondary backgrounds, default button states — a light, earthy gray |
| Darkest Night | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Ash Whisper | #80827f | neutral | Muted body text, borders for ghost components |
| Light Steel | #d5d5d4 | neutral | Subtle borders and dividers, especially in navigation |
| Market Green | #8ed462 | brand | Accent color for borders, subtle background tints, and active states — represents growth and freshness |
| Vibrant Yellow | #f5e211 | brand | Illustrative accents, footer sections — adds a cheerful, energetic pop |
| Insight Blue | #2ba0ff | brand | Accent color for specific iconography, borders on select cards — indicates information and clarity |
| Action Red | #ff705d | brand | Accent color for specific iconography, borders on select cards, illustrative elements — evokes attention and dynamism |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500 | 9px, 15px, 17px, 18px, 20px, 30px, 53px, 81px, 140px, 144px | 0.95, 1.15, 1.20, 1.25, 1.50, 2.00 | The primary typeface for all textual content, from headings to body copy and UI elements. Its clean, modern character, combined with subtle negative letter-spacing for display sizes, ensures legibility and a refined feel. Weight 500 is used for emphasis without being overly bold, maintaining the approachable tone. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 15 | 1.5 |  |
| body-lg | 18 | 1.5 |  |
| subheading | 20 | 1.5 |  |
| heading-sm | 30 | 1.25 |  |
| heading | 53 | 1.25 | -0.04 |
| heading-lg | 81 | 1.15 | -0.06 |
| display | 140 | 0.95 | -0.06 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "63.75px",
    "badges": "50px",
    "inputs": "10px",
    "buttons": "50px",
    "containers": "25.5px"
  },
  "elementGap": "21px",
  "sectionGap": "85px",
  "cardPadding": "21px",
  "pageMaxWidth": null
}
```

## Components

### Primary Ghost Button

**Role:** Interactive element

Text-only button with no background or border, using Midnight Graphite (#2c2e2a) text. Used for navigation links and secondary actions that don't require strong visual hierarchy.

### Quote Button

**Role:** Call to action

Rounded button with a 50px border-radius, background Greige Canvas (#f5f1e4) and text Midnight Graphite (#2c2e2a). Features a subtle border of Market Green (#8ed462) on active states. Padding 11px vertical, 17px horizontal.

### Navigation Menu Button

**Role:** UI control

A ghost button for menu toggling, featuring a prominent border-radius of 50px. Uses Midnight Graphite (#2c2e2a) for iconography. Text 'Get a quote' is in clean white, with a dark background.

### Rounded Info Card

**Role:** Content container

Card with a large 63.75px border-radius, background of Greige Canvas (#f5f1e4) and no visible shadow. Padding of 21px vertical and 42.5px horizontal (left starts at 21.25px). Borders can be dynamically colored with Brand Green, Insight Blue or Action Red like #8ed462, #2ba0ff, #ff705d.

### Section Highlight Card

**Role:** Content container

White background card with a 20px border-radius, used for emphasizing information blocks, like 'No more chaos.' content. Features an internal padding of 21px around content, with a primary call to action using Action Red (#ff705d) as text color.

### Feature Badge

**Role:** Informational label

Text in Midnight Graphite (#2c2e2a) on a transparent background, but with an inherent 50px border-radius to align with the rounded aesthetic. Padding is minimal at 6px. Used for concise attribute display.

## Do's

- Use Inter for all typography, maintaining a consistent brand voice across all content and UI elements.
- Prioritize Greige Canvas (#f5f1e4) and Clean White (#ffffff) for backgrounds and surfaces to maintain a light, airy feel.
- Apply a large border-radius of 63.75px to main content cards and 50px to buttons and badges for a soft, organic aesthetic.
- Utilize Midnight Graphite (#2c2e2a) for primary text and headings, ensuring high contrast against light backgrounds.
- Introduce brand colors—Market Green (#8ed462), Vibrant Yellow (#f5e211), Insight Blue (#2ba0ff), and Action Red (#ff705d)—as accents for borders, iconography, and illustrative elements, not as full background fills.
- Maintain generous padding of 21px for card content and a consistent 21px element gap to ensure comfortable readability and visual breathing room.
- Employ a subtle negative letter-spacing for larger headlines (e.g., -0.0600em at 144px, -0.0400em at 53px) to prevent them from feeling too open.

## Don'ts

- Avoid using harsh, saturated primary colors for large background areas; reserve them for accents and highlights.
- Do not use sharp corners or small border radii; maintain the soft, rounded aesthetic with values like 63.75px or 50px.
- Refrain from dense layouts; utilize the prescribed section (85px) and element (21px) gaps to ensure ample whitespace.
- Do not introduce new typefaces; rely solely on Inter to keep the typographic system cohesive.
- Avoid heavy shadows or gradients; the design emphasizes a flat and clean aesthetic, with only subtle borders and color shifts for depth.
- Do not use small, precise adjustments in spacing; stick to the established 4px grid and defined spacing tokens.
- Resist using a truly black background; opt for the deep Midnight Graphite (#2c2e2a) for dark elements to maintain softness.

## Layout

The page maintains a centered, contained layout with no explicit `pageMaxWidth` but generally respecting clear content boundaries, often surrounded by the Greige Canvas background. The hero section features a full-bleed Market Green (#8ed462) background with a large, centered headline and a supporting illustrative element. Sections alternate visually, often featuring different background colors or large illustrative elements that provide organic, curvilinear dividers between content blocks rather than sharp lines. Content is primarily arranged in two-column text and image layouts or centered stacks for stronger statements. Card grids for features are common, featuring large rounded cards. Navigation is a sticky top bar, providing persistent access to links and actions.

## Imagery

The visual language relies heavily on playful, organic illustrations featuring diverse, stylized characters in dynamic poses. These illustrations are dimensional, using a mix of solid brand colors (Market Green, Vibrant Yellow, Insight Blue, Action Red) and neutrals, often with organic, cloud-like elements or abstract shapes around them. Product context is minimal; the imagery serves to create a friendly, human-centric atmosphere rather than showcase specific tools. Icons are minimal, either outlined or filled in Midnight Graphite (#2c2e2a) or Clean White (#ffffff), maintaining a soft stroke weight. The imagery density is moderate, used strategically to break up text sections and add visual interest, often appearing partially off-screen.

## Similar Brands

| Business | Why |
| --- | --- |
| Mailchimp | Similar use of playful, organic illustrations and a clean interface with a distinctive brand accent color. |
| Webflow | Employs a precise typographic system with Inter, combines neutrals with vibrant accent colors, and uses generous spacing. |
| Stripe | Minimalist aesthetic with soft rounded edges, high contrast typography, and strategic use of a limited color palette for functional highlights. |
| Framer | Focus on highly legible typography, subtle surface differentiation, and a preference for soft, rounded shapes over sharp ones. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #2c2e2a
- background: #f5f1e4
- border: #2c2e2a
- accent: #8ed462
- primary action: no distinct CTA color

### 3-5 Example Component Prompts
- Create a hero section: Market Green (#8ed462) background. Headline 'Real human insights' using Inter at 81px, weight 400, #2c2e2a, letter-spacing -0.06. Subtext 'One global partner' using Inter at 20px, weight 400, #2c2e2a.
- Design a customer testimonial card: Rounded Info Card with a 63.75px radius, Greige Canvas (#f5f1e4) background, 21px padding. Body text 'MindMarket delivers global qualitative market research...' in Inter, 17px, weight 400, #2c2e2a. Add a 'Get a quote' button using text #2c2e2a, background #f5f1e4, 50px border-radius, 11px vertical, 17px horizontal padding.
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508580942-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508580942-thumb.jpg |
