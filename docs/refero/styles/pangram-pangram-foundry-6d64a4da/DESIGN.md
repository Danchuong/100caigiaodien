# Pangram Pangram Foundry — Refero Style

- Refero URL: https://styles.refero.design/style/6d64a4da-ef40-453e-86f7-4bfabc0c9051
- Site URL: https://pangrampangram.com
- ID: 6d64a4da-ef40-453e-86f7-4bfabc0c9051
- Theme: light
- Industry: design
- Created: 2026-04-30T01:33:11.444Z
- Ranks: newest: 576, popular: 1130, trending: 1119

> Type foundry's bold canvas: white pages, dark headers, expressive typography, and soft, rounded containers.

## Description

Pangram Pangram champions a stark, high-contrast aesthetic with functional color accents. The UI features a bright, almost white canvas, broken by dark header sections and image-heavy content blocks. Typography is the primary visual element, bold and expansive, with interactions generally expressed through subtle changes in neutral buttons or vivid, distinct status badges. Surfaces are largely flat with soft, large corner radii, avoiding heavy shadows.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #000000 | neutral | Primary text, headers, icon strokes, borders, and some button fills. This is the dominant dark neutral, grounding the bright canvas |
| Canvas | #fafafa | neutral | Page backgrounds, card surfaces, and some light text |
| Paper | #ededed | neutral | Secondary surface backgrounds, used for cards and some buttons, providing a subtle visual distinction from the main canvas |
| Slate | #666666 | neutral | Muted text, secondary link color, and card text details |
| Alert Red | #ff2f00 | brand | Orange action color for filled buttons, selected navigation states, and focused conversion moments. |
| Update Yellow | #ffb700 | accent | Yellow state accent for badges, validation surfaces, and short status labels. |
| Early Access Blue | #bfe0ff | accent | Blue state accent for badges, validation surfaces, and short status labels. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue Montreal | Inter | 400, 530, 600 | 12px, 14px, 16px, 18px, 20px, 22px, 24px, 36px, 48px, 121px, 145px | 1.00, 1.10, 1.17, 1.20, 1.30 | The primary typeface for headings, body text, navigation, and interface elements. Its wide range of weights and sizes forms the core expressive character of the brand. Default letter spacing is normal. |
| neue-montreal-semibold | Inter | 600 | 103px, 121px | 1.00 | A specific variant of Neue Montreal used for large, impactful display headings. |
| neue-york-normal-bold | Inter | 700 | 103px | 1.00 | A bold variant for display headings, adding weight and presence to feature titles. |
| neue-york-normal-normal-bold | Inter | 400 | 121px | 1.00 | A normal weight variant for very large headings, providing a softer impact than its bold counterpart. |
| frama-semibold | Figtree | 580 | 103px | 1.00 | A unique semibold display font used for specific font showcase headings, reflecting individual font identities. |
| kyoto-semibold | DM Sans | 600 | 103px | 1.00 | Another distinctive semibold display font chosen for font showcase headings, adding character diversity. |
| neue-gstaad-normal-bold | Poppins | 700 | 103px | 1.00 | A bold display font for font showcase headings, conveying strength and impact. |
| palma-fizzy-heavy | Montserrat | 800 | 103px | 1.00 | An extra-bold display font for font showcase headings, used for maximum visual punch. |
| mori-bold | Roboto | 700 | 103px | 1.00 | A bold display font for font showcase headings, sharp and clear. |
| museum-light | Open Sans Light | 300 | 103px | 1.00 | A light display font for specific font showcase headings, offering a delicate and refined touch. |
| neue-corp-normal-semibold | Titillium Web | 500 | 103px | 1.00 | A medium-semibold display font for font showcase headings, balancing authority with approachability. |
| watch-medium | Lexend | 485 | 103px | 1.00 | A unique medium weight display font for font showcase headings, providing a distinct stylistic flair. |
| monument-narrow-medium | IBM Plex Sans Condensed | 525 | 103px | 1.00 | A medium weight, narrow display font for font showcase headings, maintaining legibility while conserving horizontal space. |
| model-plastic-regular | Inter | 500 | 103px | 1.00 | A regular weight display font for font showcase headings, offering a clean, contemporary appearance. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 14 | 1.2 |  |
| body | 16 | 1.2 |  |
| subheading-sm | 18 | 1.2 |  |
| subheading | 20 | 1.2 |  |
| heading-sm | 24 | 1.17 |  |
| heading | 36 | 1.1 |  |
| heading-lg | 48 | 1.1 |  |
| display-sm | 121 | 1 |  |
| display | 145 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "badges": "999px",
    "inputs": "20px",
    "buttons": "20px"
  },
  "elementGap": "8px",
  "sectionGap": "92px",
  "cardPadding": "26px",
  "pageMaxWidth": null
}
```

## Components

### Filled Button - Dark

**Role:** Primary action button.

Background: Ink (#000000), Text: Canvas (#fafafa). Padding: 7.65px vertical, 22.95px horizontal. Radius: 20px.

### Filled Button - Light

**Role:** Secondary action button.

Background: Paper (#ededed) or Canvas (#fafafa), Text: Ink (#000000). Padding: 7.65px vertical, 22.95px horizontal. Radius: 20px.

### Outlined Button - Light

**Role:** Tertiary action button or alternative action.

Background: transparent, Text: Canvas (#fafafa), Border: 1px solid Canvas (#fafafa). Padding: 7.65px vertical, 22.95px horizontal. Radius: 20px.

### Outlined Button - Accent

**Role:** Call-to-action with strong visual emphasis.

Background: transparent, Text: Alert Red (#ff2f00), Border: 1px Alert Red (#ff2f00). Padding: 7.65px vertical, 22.95px horizontal. Radius: 20px.

### Font Showcase Card - Filled

**Role:** Displays font information within a contained content block.

Background: Paper (#ededed), Radius: 20px. Padding: 25.72px on all sides. No shadow.

### Font Showcase Card - Transparent

**Role:** Showcases font information directly on a contrasting background, usually within a themed section.

Background: transparent, Radius: 20px. Padding: 25.72px on all sides. No shadow.

### Text Input

**Role:** Form input field.

Background: Canvas (#fafafa), Text: Ink (#000000), Border: 1px Ink (#000000). Radius: 20px. Padding: 24px vertical, 45.9px right, 24px left.

### Status Badge - Alert Red

**Role:** Indicates 'New' status or a primary highlight.

Background: Alert Red (#ff2f00), Text: Ink (#000000). Radius: 999px (pill shape). Padding: 4px vertical, 11.65px horizontal.

### Status Badge - Update Yellow

**Role:** Indicates 'Update' status.

Background: Update Yellow (#ffb700), Text: Ink (#000000). Radius: 999px. Padding: 4px vertical, 11.65px horizontal.

### Status Badge - Early Access Blue

**Role:** Indicates 'Early Access' status.

Background: Early Access Blue (#bfe0ff), Text: Ink (#000000). Radius: 999px. Padding: 4px vertical, 11.65px horizontal.

## Do's

- Use Neue Montreal for all textual content, adjusting weights and sizes from the defined typescale for hierarchy.
- Apply a 20px border radius to all interactive elements like buttons and input fields, and all elevated cards.
- Utilize Alert Red (#ff2f00) solely for accenting new features, primary calls-to-action, or important status indicators.
- Maintain a clear distinction between backgrounds: use Canvas (#fafafa) for general pages and Paper (#ededed) for subtly differentiated card surfaces.
- Ensure headings use Ink (#000000) for high contrast against light backgrounds, emphasizing typographic expression.
- Prioritize text and button padding of 7.65px vertical and 22.95px horizontal for a consistent comfortable density.
- Employ the 999px radius for all badges to achieve a distinct pill-shaped visual for status indicators.

## Don'ts

- Do not use shadows; rely on background color changes, borders, and rounded corners for visual separation and depth.
- Avoid using Alert Red (#ff2f00) for general body text or non-actionable elements, reserving its impact for specific functions.
- Do not deviate from the defined 20px or 999px border radii; inconsistent rounding undermines the soft, approachable aesthetic.
- Do not introduce additional chromatic colors beyond Alert Red, Update Yellow, and Early Access Blue for UI elements.
- Avoid dense, information-heavy blocks of text without ample vertical spacing, as readability is key with the expansive type.
- Do not use very thin strokes for borders; a 1px solid stroke in Ink (#000000) or Canvas (#fafafa) is typical for emphasis or separation.
- Do not use letter-spacing values other than 'normal' for Neue Montreal, as this typeface relies on its natural spacing.

## Layout

The page primarily uses a full-bleed layout for hero sections and large image blocks, with content centered within these expansive areas. Subsequent sections typically maintain a maximum content width, creating a spacious, readable flow. The hero pattern features large, centered headlines and calls-to-action over an image background. Vertical rhythm is established by section gaps around 92px. Content often alternates between large textual displays and visual blocks. There are instances of 4-column card grids for features, particularly for font showcases. Navigation is a sticky top bar, minimalist and un-intrusive.

## Imagery

The visual language for imagery varies: hero sections feature large, atmospheric photography or blurred, abstract product shots, often with a dark overlay to provide contrast for white text. Other sections use product-focused imagery (e.g., food items relevant to font names) which are often full-bleed or large-scale background elements. Icons are minimal, typically outlined and black on light backgrounds, or white on dark sections, keeping focus on typography. Imagery serves as evocative atmosphere or direct content showcase rather than decorative flourishes.

## Similar Brands

| Business | Why |
| --- | --- |
| Fonts.com | Similar focus on presenting typefaces with large visual examples and detailed information within a clean, primarily light interface. |
| Google Fonts | Emphasizes typography with expansive previews and clear, functional UI primarily on a white background, featuring minimal color for accents. |
| Future Fonts | Shares the use of large, experimental typography as hero elements and a similar card-based layout for font showcases on a light base. |
| Displaay Type Foundry | Utilizes a comparable monochromatic base with strong typographic hierarchy and specific color accents for status indicators or calls to action. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #fafafa
border: #000000
accent: #ff2f00
primary action: #ff2f00 (filled action)

Example Component Prompts:
1. Create a large hero section: full-width dark image background, centered display text 'Neue Montreal' in Neue Montreal weight 600 size 145px (#fafafa). Below it, add caption text 'Version 3 is here!' in Neue Montreal weight 400 size 24px (#fafafa). Include two buttons: 'Explore font' (outlined, transparent background, #fafafa text, #fafafa border, 20px radius, 7.65px vertical 22.95px horizontal padding) and 'Try for Free' (filled, #000000 background, #fafafa text, 20px radius, 7.65px vertical 22.95px horizontal padding).
2. Create a 'Font Showcase Card' for 'Neue York Collection': background #ededed, 20px radius, 25.72px padding. Inside, display font title 'Neue York Collection' in Neue Montreal weight 600 size 18px (#000000). Below that, add descriptive text '48 styles + Variable cuts' in Neue Montreal weight 400 size 14px (#666666). In the top right, place an 'Update' badge: background #ffb700, #000000 text, 999px radius, 4px vertical 11.65px horizontal padding.
3. Design a header with site navigation: background #fafafa, with 'Pangram Pangram Foundry' logo in Neue Montreal weight 600 size 18px (#000000). Navigation links 'All fonts', 'Font starter pack', 'Font in use', 'Academy', 'Support' in Neue Montreal weight 400 size 16px (#000000). Include a search icon and a hamburger menu icon, both in #000000.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512761408-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512761408-thumb.jpg |
