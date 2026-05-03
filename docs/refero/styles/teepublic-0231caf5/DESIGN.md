# TeePublic — Refero Style

- Refero URL: https://styles.refero.design/style/0231caf5-0347-4f2d-ba20-5bab8fcaf2ce
- Site URL: https://unfurproject.com
- ID: 0231caf5-0347-4f2d-ba20-5bab8fcaf2ce
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T01:36:52.529Z
- Ranks: newest: 561, popular: 1036, trending: 966

> Vibrant Pop Canvas: Bold and graphic against bright white.

## Description

TeePublic utilizes a dynamic, high-contrast aesthetic with a playful edge. Dark primary text and bold accent colors define a vibrant mood, set against a predominantly white and subtle gray surface palette. Components feature soft, large radii and distinct shadow treatments, ensuring readability while maintaining a confident, attention-grabbing presence.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #151523 | neutral | Primary text, borders, dark surface backgrounds for emphasis, prominent headings, and input text |
| Canvas White | #ffffff | neutral | Page backgrounds, primary card surfaces, active input fields, and all text on dark backgrounds |
| Ghost Gray | #e9e9ec | neutral | Secondary card backgrounds, subtle dividers, and inactive element states |
| Border Silver | #d7d7db | neutral | Hairline borders, muted input outlines, and subtle separators |
| Cloud Whisper | #f1f3fe | neutral | Subtle background wash for cards and featured sections, indicating a slight elevation or grouping without strong contrast |
| Royal Indigo | #4e64df | brand | Primary action buttons, prominent links, interactive borders, and key brand elements — provides a strong, positive interactive cue |
| Crimson Strike | #ff0000 | accent | Red action color for filled buttons, selected navigation states, and focused conversion moments. Use as a supporting accent, not as a status color |
| Lavender Mist | #99a7f5 | accent | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Electric Violet | #6c7ee4 | brand | Icon fills and decorative elements emphasizing brand recognition; a slightly brighter variant of the brand's core blue |
| Faded Steel | #49495a | neutral | Subtle text for secondary information and descriptive copy, providing less visual weight than primary text |
| Vivid Chroma Gradient | #25d454 | brand | Decorative banner backgrounds, section highlights — used for brand communication and visual interest |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial |  | 400 | 13px | 1.2 | Arial — detected in extracted data but not described by AI |
| Roobert | Inter | 400, 500, 600, 700 | 11px, 12px, 13px, 14px, 16px, 18px, 20px, 24px, 40px | 1.00, 1.15, 1.17, 1.20, 1.25, 1.33, 1.43, 1.45, 1.50, 1.56, 1.67, 2.75 | Primary body text, labels, and general UI elements. Its slightly condensed and clean appearance supports compact layouts. |
| Roobert | Inter |  |  |  | Sub-headings, navigation links, and emphasized text within body copy. Its semi-bold presence ensures clear hierarchy. |
| Roobert | Inter |  |  |  | Medium to large headings, where a strong but not overpowering statement is needed. The robust weight provides importance without being overly aggressive. |
| Sharp Grotesk | Montserrat | 400, 600, 700 | 20px, 24px, 28px, 32px | 1.00, 1.13, 1.14, 1.15, 1.20, 1.33 | Large display headings and prominent call-to-action text. Its distinctive, impactful character grabs attention, signaling key messages. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.45 |  |
| body | 14 | 1.5 |  |
| heading-sm | 18 | 1.33 |  |
| heading | 20 | 1.25 |  |
| heading-lg | 24 | 1.2 |  |
| display | 40 | 1.15 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "pills": "100px",
    "inputs": "12px",
    "buttons": "12px",
    "largeCards": "20px"
  },
  "elementGap": "8px",
  "sectionGap": "24px",
  "cardPadding": "12px",
  "pageMaxWidth": "1440px"
}
```

## Components

### Ghost Button

**Role:** Secondary actions or navigation links that need less emphasis. They appear as text with a transparent background.

Transparent background, white text (#ffffff), no border. Radius: 12px. Padding: 0px.

### Neutral Outlined Button

**Role:** Tertiary actions or category filters, providing interaction without competing with primary calls to action.

Transparent background, #151523 text, #151523 1px border. Radius: 12px. Padding: 12px 16px.

### Primary Filled Button

**Role:** Main calls to action.

Background: #4e64df. Text: #ffffff. No border. Radius: 12px. Padding: 8px 16px.

### Crimson Call To Action Button

**Role:** High-urgency primary actions, distinct from the brand's standard primary color.

Background: #ff0000. Text: #ffffff. No border. Radius: 10px. Padding: 14px 28px.

### Elevated Feature Card

**Role:** Highlighting key features or content, using elevation to draw attention.

Background: #e9e9ec. Radius: 20px. Shadow: rgba(21, 21, 35, 0.2) 0px 4px 8px 0px. No internal padding.

### Grouped Content Card

**Role:** Organizing related content into visually distinct blocks on the page, with subtle elevation.

Background: #f1f3fe. Radius: 12px. Shadow: rgba(21, 21, 35, 0.2) 0px 2px 4px 0px. Padding: 24px.

### Subtle Information Card

**Role:** Presenting supplementary information or less prominent content, without strong visual weighting.

Background: #f1f3fe. Radius: 12px. No shadow. Padding: 12px.

### Search Input Field

**Role:** Primary user input for search functions.

Background: #ffffff. Text: #151523. Border: #151523. Radius: 12px 0px 0px 12px. Padding: 6px 15px.

### Outline Input Field

**Role:** General form inputs, blending subtly into the background.

Transparent background. Text: #000000. Border: #000000. Radius: 0px. Padding: 1px 2px.

### Standard Input Field

**Role:** Basic input fields across the application.

Background: #ffffff. Text: #151523. Border: #d7d7db. Radius: 12px. Padding: 12px 32px 12px 16px.

## Do's

- Use Royal Indigo (#4e64df) for all primary interactive elements like buttons and prominent links.
- Apply Canvas White (#ffffff) as the default background for content sections and primary cards.
- Employ Midnight Ink (#151523) for all primary headings and body text to ensure high contrast and readability.
- Maintain a compact density with an elementGap of 8px between closely related UI components.
- Utilize a 12px border-radius for most interactive elements and general cards to maintain a consistent soft aesthetic.
- Use Sharp Grotesk for large headings (20px and above) to introduce distinct brand personality.
- Apply subtle shadow rgba(21, 21, 35, 0.2) 0px 2px 4px 0px for elevated cards to create clear visual separation.

## Don'ts

- Avoid using multiple chromatic colors for primary actions on a single screen; reserve Crimson Strike (#ff0000) for highest urgency only.
- Do not use dark backgrounds for large content areas; the system relies on a light canvas for readability.
- Do not deviate from the established padding and radius values for buttons and cards; consistency in these areas is key.
- Avoid using decorative gradients for non-brand essential elements; they are reserved for specific brand communication.
- Do not introduce new font families; the current selection provides sufficient typographic range.
- Do not reduce border-radius below 12px for standard components; the rounded aesthetic is a core identifier.
- Avoid making text too light against white backgrounds; ensure sufficient contrast with Midnight Ink (#151523) or Faded Steel (#49495a).

## Layout

The page primarily uses a max-width contained layout of 1440px, with content centered. The hero section often features full-bleed imagery or gradient backgrounds with centered text overlays. Vertical rhythm is established through consistent section gaps and alternating content arrangements, including two-column text-left/image-right patterns and three-column card grids for features. Navigation is a sticky top bar with prominent brand links and actions.

## Imagery

The visual language predominantly features high-quality, product-focused photography and lifestyle imagery on white or subtly colored backgrounds. These are often contained within rounded card shapes or as full-bleed hero elements. Illustrations are flat, colorful, and organic, used for decorative atmosphere and branding, often featuring a vibrant gradient. Icons are primarily outlined or filled versions of Electric Violet (#6c7ee4), maintaining a crisp, light stroke. Imagery density is moderate, with images used to break up text and showcase products or features.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Feature Card | rgba(21, 21, 35, 0.2) 0px 4px 8px 0px |
| Grouped Content Card | rgba(21, 21, 35, 0.2) 0px 2px 4px 0px |
| Button/Link | rgba(21, 21, 35, 0.2) 0px 2px 4px 0px |
| Button | rgba(0, 0, 0, 0.2) 0px 2px 6px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Redbubble | User-generated content platforms with a focus on product display, often using a clean white aesthetic and vibrant accent colors. |
| Etsy | Marketplace UI with a focus on clear product presentation, consistent card layouts, and strong calls to action set against a light background. |
| Threadless | Community-driven apparel and design e-commerce featuring diverse imagery within a structured, often white-dominant layout with bold typography. |
| Creative Market | Digital asset marketplace with a clean UI, prominent product cards, and a mix of neutral and accent colors for hierarchy and interaction. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #151523
background: #ffffff
border: #d7d7db
accent: #99a7f5
primary action: #4e64df (filled action)

Example Component Prompts:
1. Create a neutral outlined button: transparent background, #151523 text, #151523 1px border, 12px radius, 12px 16px padding, Roobert weight 600, size 14px.
2. Create a primary filled button: #4e64df background, #ffffff text, no border, 12px radius, 8px 16px padding, Roobert weight 700, size 16px.
3. Create an elevated feature card: #e9e9ec background, 20px radius, rgba(21, 21, 35, 0.2) 0px 4px 8px 0px shadow, no internal padding. Place a headline inside at Sharp Grotesk weight 700, size 28px, #151523.
4. Create a standard input field: #ffffff background, #151523 text, #d7d7db border, 12px radius, 12px 32px 12px 16px padding, Roobert weight 400, size 14px.
5. Create a secondary information card: #f1f3fe background, 12px radius, no shadow, 12px padding. Add body text at Roobert weight 400, size 14px, #49495a.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512985212-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512985212-thumb.jpg |
