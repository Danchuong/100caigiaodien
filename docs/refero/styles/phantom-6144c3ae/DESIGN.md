# Phantom — Refero Style

- Refero URL: https://styles.refero.design/style/6144c3ae-fc57-4efe-b6ed-2b5eab2dc108
- Site URL: https://phantom.com
- ID: 6144c3ae-fc57-4efe-b6ed-2b5eab2dc108
- Theme: light
- Industry: crypto
- Created: 2026-04-30T00:42:02.869Z
- Ranks: newest: 726, popular: 850, trending: 816

> Muted violet canvas

## Description

Phantom uses a confident, muted-violet interface language. Its pages feature a bright canvas with substantial rounded corners, lending a soft, approachable feel to components. Typography is clear and prominent, anchoring sections, while a spectrum of muted and vivid violet tones defines interactive elements and brand accents against a largely achromatic background. Functional elements like buttons feature a subtle, colored box shadow that deepens the visual hierarchy without heavy drop shadows.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #fdfcfe | neutral | Page backgrounds, card surfaces, ghost button backgrounds |
| Phantom Violet | #3c315b | brand | Primary text, interactive element borders, navigation links — deep violet provides a strong anchor for content and interactive states |
| Ghost Button Violet | #e2dffe | brand | Primary action button background, providing a soft, pastel contrast to the deep Phantom Violet text and icons |
| Deep Sea | #1c1c1c | neutral | Secondary text, dark button backgrounds |
| Slate Gray | #e9e8ea | neutral | Muted button backgrounds, subtle dividers |
| Sky Lavender | #ab9ff2 | brand | Prominent button backgrounds, decorative SVG fills — a vibrant variant of Phantom Violet for high-signal actions |
| Soft Fog | #f4f2f4 | neutral | Subtle background sections, hover states |
| Cool Gray | #86848d | neutral | Muted icons, secondary navigation text, inactive elements |
| Success Green | #2ec08b | semantic | Success badges, status indicators |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Phantom |  | 350, 400 | 13px, 15px, 16px, 20px, 24px, 30px, 64px, 80px, 96px | 1.00, 1.10, 1.20, 1.21, 1.25, 1.35, 1.40 | Body copy, navigation, button text, and smaller headings — a lighter weight maintains an airy feel for content blocks. |
| Phantom |  | 350, 400 | 13px, 15px, 16px, 20px, 24px, 30px, 64px, 80px, 96px | 1.00, 1.10, 1.20, 1.21, 1.25, 1.35, 1.40 | Headings and display text — a slightly heavier weight for impact without sacrificing the distinct character of the custom typeface. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.25 | -0.025 |
| body-sm | 15 | 1.25 | -0.025 |
| subheading | 20 | 1.25 | -0.025 |
| heading-sm | 24 | 1.25 | -0.025 |
| heading | 30 | 1.25 | -0.025 |
| heading-lg | 64 | 1.1 | -0.025 |
| display | 80 | 1.1 | -0.025 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "24px",
    "header": "100px",
    "buttons": "32px",
    "largeElements": "24px",
    "smallElements": "4px"
  },
  "elementGap": "4px",
  "sectionGap": "32px",
  "cardPadding": "48px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Calls to action, e.g., 'Download Phantom'

Background: Ghost Button Violet (#e2dffe), Text: Phantom Violet (#3c315b), Border Radius: 32px, Padding: 12px 20px, Shadow: offset (0px 0px 4px 0px) Ghost Button Violet (#e2dffe). Uses Phantom font, weight 350.

### Inverted Dark Button

**Role:** Alternative action buttons on darker backgrounds

Background: Deep Sea (#1c1c1c), Text: Canvas White (#fdfcfe), Border Radius: 24px, Padding: 48px. Uses Phantom font, weight 350.

### Ghost Outline Button

**Role:** Subtle secondary actions or links

Background: transparent, Text: Canvas White (#fdfcfe), Border: 1px solid Canvas White (#fdfcfe), Border Radius: 32px, Padding: 16px. Uses Phantom font, weight 350.

### Muted Button

**Role:** Less prominent actions, often within a card or section

Background: Slate Gray (#e9e8ea), Text: Deep Sea (#1c1c1c), Border Radius: 24px, Padding: 48px. Uses Phantom font, weight 350.

### Content Card

**Role:** Information grouping and background for features

Background: Canvas White (#fdfcfe), Border Radius: 24px, No shadow, Padding: 48px. Often contains headings and text in Phantom Violet.

### Success Status Badge

**Role:** Indicates successful status or positive attributes

Background: Success Green (#2ec08b), Text: Phantom Violet (#3c315b), Border Radius: 50% (circular), Padding: 0px. Used for small indicators.

### Navigation Link

**Role:** Primary navigation items in the header

Text: Phantom Violet (#3c315b), No background, No border. Uses Phantom font, weight 350. Active state indicated by a bottom border or color change.

## Do's

- Use Phantom Violet (#3c315b) for all primary text content and interactive element borders to maintain brand consistency.
- Apply a 32px border-radius to all interactive buttons for a consistent soft, approachable feel.
- Structure pages with a base unit of 4px for all spacing measurements, including `row-gap` and `column-gap`.
- Elevate primary action buttons with a subtle 0px 0px 4px 0px box-shadow using Ghost Button Violet (#e2dffe), not harsh black shadows.
- Maintain a clear visual hierarchy by using Canvas White (#fdfcfe) for main page and card backgrounds.
- Employ the Phantom font at weight 350 for body text and navigation, and weight 400 for display headings, always with -0.025em letter-spacing.
- Ensure section gaps default to 32px to create comfortable visual breathing room between content blocks.

## Don'ts

- Do not use harsh or high-contrast shadows; only subtle, colored box-shadows are permitted for elevation.
- Avoid using multiple font families; restrict typography to the Phantom typeface in its specified weights.
- Do not deviate from the established border-radius values; always use 32px for buttons and 24px for cards.
- Refrain from introducing new accent colors beyond the defined violet palette, unless for semantic status indicators.
- Do not use generic gray backgrounds for sections; instead, use Soft Fog (#f4f2f4) for subtle visual differentiation.
- Avoid heavy borders or solid dividers; use subtle color changes or text separation instead of explicit lines.
- Do not use letter-spacing values other than -0.025em, as this is a key characteristic of the Phantom typography.

## Layout

The page employs a max-width contained layout rather than full-bleed, with content centered. The hero section often features a large, centered headline and a call to action, with alternating background colors from Canvas White to Phantom Violet or Ghost Button Violet. Sections follow a consistent vertical rhythm with 32px gaps, occasionally featuring two-column layouts where text and UI elements are paired. Card grids are used for features, showcasing components with generous padding and rounded corners. The navigation bar is a sticky header at the top, containing a logo, text links, and a prominent download button, maintaining presence throughout scrolling.

## Imagery

This site predominantly uses a blend of custom illustrations and text to convey its message. Illustrations, specifically the ghost character, are single-color, solid fills, and playful, matching the Phantom Violet color palette. They serve both decorative and explanatory roles without heavy detail, maintaining a flat aesthetic. Photography and complex product screenshots are largely absent, favoring abstract or simplified visual metaphors and focused UI elements. Icons are minimal, outlined, or solid, with stroke weight matching text weight where appropriate. The overall density is balanced, allowing ample negative space around the simple graphic elements.

## Elevation

| Element | Style |
| --- | --- |
| Primary Action Button | 0px 0px 4px 0px #e2dffe |

## Similar Brands

| Business | Why |
| --- | --- |
| Rainbow Wallet | Both use a vibrant, custom, playful aesthetic for crypto, with significant use of pastel brand colors and soft shapes. |
| Plaid | Shares a clean, modern interface with a strong emphasis on typography, soft neutrals, and subtle branding through single-color elements. |
| Figma | Exhibits a bright, spacious UI with rounded corners and a focused use of brand accent colors for interactive elements over a neutral canvas. |
| Linear | Employs an aesthetic with generous spacing, clear typography, and a refined use of a single accent color against a largely monochrome palette. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #3c315b
background: #fdfcfe
border: #3c315b
accent: #ab9ff2
primary action: #e2dffe (filled action)

Example Component Prompts:
Create a Primary Action Button: #e2dffe background, #1c1c1c text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
Create a feature card: background Canvas White (#fdfcfe), 24px radius, 48px padding. Headline 'Trading tools' at 64px Phantom weight 400, #3c315b, letter-spacing -0.025em. Subtext 'for everyone' at 30px Phantom weight 350, #3c315b, letter-spacing -0.025em. Ghost button 'See more' with transparent background, text Phantom Violet (#3c315b), 1px border Phantom Violet (#3c315b), 32px radius, 16px padding.
Create a navigation bar: background Canvas White (#fdfcfe). Logo on left. Navigation links 'Features', 'Learn', 'Explore' with text Phantom Violet (#3c315b), 4px element gap. Download button 'Download' right-aligned, background Sky Lavender (#ab9ff2), text Canvas White (#fdfcfe), 32px radius, 12px 20px padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509694880-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509694880-thumb.jpg |
