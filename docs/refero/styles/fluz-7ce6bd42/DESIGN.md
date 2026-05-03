# Fluz — Refero Style

- Refero URL: https://styles.refero.design/style/7ce6bd42-e498-47c0-ad02-7b3a0f5d94e0
- Site URL: https://fluz.app/us
- ID: 7ce6bd42-e498-47c0-ad02-7b3a0f5d94e0
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:03:17.431Z
- Ranks: newest: 881, popular: 526, trending: 374

> Vivid gradient playground

## Description

Fluz employs a vibrant, energetic visual style, characterized by bold, condensed typography on gradients with floating illustrative elements. The UI balances strong, dark text against light or gradient backgrounds, emphasizing action and impact. Components are designed with soft, rounded edges and prioritize clear calls to action, maintaining a playful yet assertive tone.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Money Max Black | #1a0000 | brand | Primary action background, strong text, link borders, and decorative accents. This near-black red provides a bold, dominant presence |
| Sky Blue | #98bbf4 | accent | Background for feature cards, providing a soft, expansive feel |
| Forest Noir | #11190c | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Canvas White | #ffffff | neutral | Main page background, content surfaces, button text, and base for overlays |
| Mist Gray | #f2f2f2 | neutral | Subtle secondary background for cards or section breaks, providing visual texture |
| Light Cloud | #ededec | neutral | Hover states, subtle borders, and background for ghost buttons |
| Iron Slate | #3a3a3a | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Onyx Shadow | #221919 | neutral | Deep background for certain sections, giving a rich, dark contrast |
| Subtle Ash | #514f4c | neutral | Muted body text and secondary information, maintaining hierarchy without stark contrast |
| Pebble Gray | #aeaea6 | neutral | Helper text and descriptive paragraphs, offering a gentler readability |
| Hero Gradient Green to Blue | #82befe | brand | Primary hero background, creating a dynamic and expansive visual field. This gradient sets an energetic and inviting tone |
| Hero Gradient Vertical | #7db4f4 | brand | A variant of the hero gradient, for vertical applications or specific sections requiring a similar chromatic blend |
| Dark Gradient Background | #262221 | brand | Rich, dark background for sections that need maximum contrast and depth |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Area Semibold | Inter | 400, 700 | 16px, 17px, 20px | 1.40, 1.45, 1.50 | General body text, navigation elements, and card text. Provides a clean, readable contrast to the condensed headings. |
| Greed Condensed SemiBold | Bebas Neue | 400, 700 | 16px, 24px | 1.17, 1.25, 1.50 | Primary headings and display text, used at large sizes with tight letter spacing for maximum impact and a bold, declarative statement. |
| Greed-CondensedSemiBold | Bebas Neue | 400, 700 | 16px, 24px | 1.17, 1.25, 1.50 | Subheadings and section titles, supporting the condensed style with slightly looser tracking. |
| Greed-SemiBold | Public Sans | 400, 700 | 11px, 14px | 1.27, 1.29 | Metadata, captions, and smaller interface labels. |
| Arial | Arial | 400 | 13px | 1.20 | System default for utilitarian elements like legal text or form labels, ensuring accessibility. |
| Greed Condensed SemiBold |  | 700 | 18px, 20px, 32px, 42px, 64px, 96px, 203px | 0.79, 0.91, 1, 1.15, 1.2, 1.33 | Greed Condensed SemiBold — detected in extracted data but not described by AI |
| Greed SemiBold |  | 600, 700 | 15px, 54px | 0.92, 1.6 | Greed SemiBold — detected in extracted data but not described by AI |
| Area-Extrabold |  | 700 | 11px | 1.4 | Area-Extrabold — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.4 | 0 |
| body-sm | 14 | 1.29 | 0 |
| body | 16 | 1.4 | 0 |
| subheading | 24 | 1.25 | -0.016 |
| heading | 42 | 1.15 | -0.025 |
| heading-lg | 64 | 1 | -0.025 |
| display | 96 | 0.91 | -0.025 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "images": "20px",
    "buttons": "100px"
  },
  "elementGap": "5px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": "1750px"
}
```

## Components

### Primary Action Button

**Role:** High-impact call to action

Filled with Money Max Black (#1a0000), white text (#ffffff), 200px border-radius, 16px vertical padding, 32px horizontal padding. This creates a distinct, pill-shaped button.

### Outline Ghost Button

**Role:** Secondary or tertiary action

Transparent background (rgba(0,0,0,0)), text and 1px border in Forest Noir (#222624, implied from raw data #161616), 100px border-radius, 8px vertical padding, 18px horizontal padding. A subtle, rounded button for less prominent actions.

### Light Muted Button

**Role:** Informational or inactive states

Background in Light Cloud (#ededec), text in Money Max Black (#1a0000), 100px border-radius, 8px vertical padding, 16px horizontal padding. Used for buttons that need less emphasis.

### Floating Content Card

**Role:** Showcasing features or content blocks

Transparent background (rgba(0,0,0,0)), 20px border-radius, generous 36px padding on top, right, and left, with 0px bottom padding. Focuses on content presentation without a contained background.

### Product Display Card

**Role:** Presenting product visuals

Transparent background (rgba(0,0,0,0)), 0px border-radius, no padding. Used for full-bleed imagery or dynamic content blocks where the image defines the card shape.

### Hero Section Callout Card

**Role:** Primary informational sections requiring visual distinction

Background in Sky Blue (#98bbf4), 40px top and bottom border-radius with 0px side radius, 65px vertical padding, 40px horizontal padding. Creates a prominent, soft-edged container for hero content.

## Do's

- Use Greed Condensed SemiBold 700 with letter spacing from -0.030em to -0.005em for all prominent headings to maintain high impact.
- Apply 200px border-radius to all primary action buttons for a consistent pill-shaped appearance.
- Utilize the Hero Gradient Green to Blue for primary hero sections, ensuring a dynamic and brand-aligned background.
- Structure major page sections with a 40px section gap for comfortable breathing room.
- Employ Money Max Black (#1a0000) for all primary text elements to ensure strong contrast and brand recognition.
- Use a Light Cloud (#ededec) background for ghost buttons and subtle interactive elements.
- Maintain a 1750px pageMaxWidth for horizontal content containment, creating a wide but controlled layout experience.

## Don'ts

- Avoid sharp corners; ensure all containers, cards, and buttons use a minimum 20px radius unless specifically constrained by imagery.
- Do not use generic system fonts for display headings; always prioritize Greed Condensed SemiBold or its substitutes for brand consistency.
- Refrain from using overly high-contrast borders on cards; prefer soft or transparent backgrounds with subtle elevation for depth.
- Do not introduce new primary action colors; stick to Money Max Black (#1a0000) for filled buttons and Forest Noir (#11190c) for outlined buttons.
- Avoid dense packing of elements; maintain at least 5px for element gaps to preserve readability and visual comfort.
- Do not use subtle, muted colors for primary calls to action; these should always be bold and clear using Money Max Black.
- Do not alter the tight letter spacing of Greed Condensed SemiBold for headlines; it is integral to its visual impact.

## Similar Brands

| Business | Why |
| --- | --- |
| Revolut | Both use vibrant gradients, bold typography, and a modern, slightly playful aesthetic for financial services, with an emphasis on app screenshots. |
| Cash App | Similar use of dark backgrounds for elevated sections, bold, condensed display fonts, and clear, action-oriented design in a financial context. |
| Chime | Employs clean, rounded UI elements alongside a bright, inviting color palette with a strong brand accent, making financial services feel approachable. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1a0000
background: #ffffff
border: #ededec
accent: #98bbf4
primary action: #1a0000 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: Money Max Black background (#1a0000), Canvas White text (#ffffff), 200px radius, 16px vertical padding, 32px horizontal padding.
2. Create a Product Display Card: transparent background, 0px radius, with an embedded full-bleed image and no padding.
3. Create a Hero Section Headline: 'YOUR MONEY ON MAX.' using Greed Condensed SemiBold 700 at 96px, letter-spacing -0.025em, Canvas White text (#ffffff), centered over the Hero Gradient Green to Blue background.
4. Create an Outline Ghost Button: transparent background (rgba(0,0,0,0)), Forest Noir text (#11190c, or #161616 if used for border), 100px radius, 8px vertical padding, 18px horizontal padding, with a 1px Forest Noir border.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507373608-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507373608-thumb.jpg |
