# Duna — Refero Style

- Refero URL: https://styles.refero.design/style/8cf4a580-bfb6-4090-a899-f734ffe62370
- Site URL: https://duna.com
- ID: 8cf4a580-bfb6-4090-a899-f734ffe62370
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:28:27.782Z
- Ranks: newest: 789, popular: 564, trending: 352

> Understated Compliance Authority

## Description

Duna employs a quietly confident and sophisticated aesthetic, characterized by a near-monochromatic palette and subtle textural shifts. Typography is precise and highly tracked, creating a sense of understated authority. Surfaces are clean and layered, with minimal elevation, allowing content to take precedence. The overall impression is one of grounded reliability, eschewing overt flash for refined clarity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, strong headings, critical icons, high-contrast borders |
| Canvas White | #ffffff | neutral | Page backgrounds, primary card surfaces, ghost button backgrounds, default borders |
| Near White | #f7f7f5 | neutral | Subtle section backgrounds, alternate surface treatment, cookie banner background |
| Deep Charcoal | #292421 | neutral | Secondary headings, prominent body text, darker icons and fills |
| Subtle Gray | #898683 | neutral | Muted body text, helper text, subtle borders |
| Card Wash | #edece7 | neutral | Distinct card background color, differentiating content blocks from the canvas |
| Quiet Black | #1a1816 | neutral | Tertiary text, icon fills, understated borders |
| Medium Gray | #444444 | neutral | Input placeholder text, cookie banner text |
| Onyx Button Background | #160f0c | neutral | Filled button backgrounds for primary calls to action |
| Light Steel | #b2afae | neutral | Decorative icon fills, subtle illustrative elements |
| Slate Text | #0d0d0d | neutral | Dark body text, dark icon strokes |
| Input Fill | #eeeeee | neutral | Input field background color |
| Accent Purple | #1b0624 | brand | Heading color, brand accents, selected decorative borders/strokes — a subtle, dark chromatic touch that feels like a shadow, not a highlight |
| Muted Slate | #766a7c | brand | Small informational button backgrounds (e.g., news announcements) — a desaturated, almost neutral chromatic tint |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 12px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| GT America | Inter | 400 | 20px | 1.50 | Primary typeface for all headings, body text, and links. The varied tracking values create a sophisticated, tailored feel, with tighter spacing for larger display text and normal spacing for smaller body text. |
| GT America Trial Rg | Inter | 400 | 14px, 16px | 1.50, 1.60, 1.71 | Specific body text usage, particularly for descriptive paragraphs where slightly looser tracking is preferred. |
| GT America Trial Md | Inter | 400, 500 | 17px, 80px | 1.00, 1.76 | Used for specific large headings and numerical data, leveraging tabular figures for alignment and slightly tighter tracking for impact. |
| GT America Medium | Inter | 400 | 20px | 1.50 | Used for emphasized body text or subheadings, with a distinct negative letter-spacing for a condensed appearance. |
| Inter | system-ui | 400 | 12px, 14px | 1.20, 1.50 | Supplemental font for card details and some smaller body text, used in contexts requiring greater system font fallback stability. |
| GT America Regular |  | 400 | 12px, 14px, 16px, 18px, 20px, 24px, 32px, 40px, 44px, 72px | 1, 1.1, 1.2, 1.3, 1.4, 1.5 | GT America Regular — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 | 0 |
| body-sm | 14 | 1.5 | 0 |
| body | 16 | 1.71 | 0 |
| subheading | 18 | 1.5 | 0 |
| heading-sm | 20 | 1.5 | -0.4 |
| heading | 24 | 1.3 | -0.72 |
| heading-lg | 32 | 1.2 | -0.96 |
| display | 40 | 1.1 | -2 |
| display-lg | 44 | 1.1 | -2.2 |
| display-xl | 72 | 1 | -4.32 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "images": "24px",
    "inputs": "8px",
    "buttons": "999px",
    "smallElements": "12px"
  },
  "elementGap": "10px",
  "sectionGap": "40px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call to action button.

Background: Onyx Button Background (#160f0c), Text: Canvas White (#ffffff), Border Radius: 999px, Padding: 8px vertical, 14px horizontal.

### Ghost Button

**Role:** Secondary action or navigation outside of primary flows.

Background: transparent (rgba(26, 23, 21, 0)), Text: Midnight Ink (#000000), Border: 1px Midnight Ink (#000000), Border Radius: 999px, Padding: 6px vertical, 20px horizontal.

### Announcement Pill

**Role:** Small, informational component to highlight news or status.

Background: Muted Slate (#766a7c), Text: Canvas White (#ffffff) / Midnight Ink (#000000) (if dark background), Border Radius: 999px, Padding: 6px vertical, 20px horizontal.

### Simple Card

**Role:** Basic container for information, features a subtle background to distinguish from canvas.

Background: Card Wash (#edece7), Border Radius: 16px, Box Shadow: none, Padding: 0px.

### Elevated Card

**Role:** Interactive or featured card with a light shadow for depth.

Background: Canvas White (#ffffff), Border Radius: 14px, Box Shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset, Padding: 0px.

### Text Input Active

**Role:** User input field.

Background: Input Fill (#eeeeee), Text: Medium Gray (#444444), Placeholder: Medium Gray (#444444), Border: 1px Medium Gray (#444444), Border Radius: 8px, Padding: 10px.

### Navigation Link

**Role:** Top-level navigation items.

Text: Midnight Ink (#000000), Hover: Underlined with Midnight Ink (#000000) (not observed but inferred). No distinct background, padding for interactive area: 4px vertical, 6px horizontal.

### Cookie Consent Banner

**Role:** Non-intrusive notification banner.

Background: Near White (#f7f7f5), Text: Medium Gray (#444444), Border Radius: Not specified, but implied from overall shape language.

## Do's

- Use GT America with specific letter-spacing adjustments for all headings to maintain the refined and precise typographic hierarchy.
- Utilize Canvas White (#ffffff) as the dominant page background, reserving Near White (#f7f7f5) for subtle section differentiation or specific component backgrounds.
- Apply a 999px border-radius to all buttons and small interactive elements to achieve a consistent pill-like shape.
- Distinguish cards by using either Card Wash (#edece7) for simple containers or Canvas White (#ffffff) with an inset shadow for elevated content.
- Prioritize Onyx Button Background (#160f0c) with Canvas White (#ffffff) text for primary calls to action, maintaining a premium, understated feel.
- Employ Accent Purple (#1b0624) sparingly and strategically for impactful headings or brand-specific graphical elements, not as a general accent color.
- Maintain comfortable element spacing using a base unit of 10px, with larger gaps for sections to ensure content breathing room.

## Don'ts

- Avoid using highly saturated colors for interface elements; the brand relies on a nearly monochromatic palette with restrained chromatic accents.
- Do not use heavy drop shadows; elevation is primarily conveyed through subtle background shifts and a very soft inset shadow on specific cards.
- Do not introduce decorative borders or strong differentiating lines; surfaces are generally seamless or subtly defined by background color changes.
- Never use generic system fonts for headings or body text; always map to the GT America family to preserve the distinct typographic personality.
- Avoid arbitrary radius values; adhere to the established radii of 999px for buttons, 16px for cards, and 8px for inputs.
- Do not implement complex gradients or bold background patterns; the system favors clean, flat surfaces.
- Do not vary line-height aggressively across body text; stick to the established ratios to maintain consistent reading rhythm.

## Layout

The page primarily uses a max-width contained layout, likely around 1200px, horizontally centered. The hero section is full-bleed with a large illustrative background and centered headline, followed by a 'news pill' that breaks the full-width image. Subsequent sections feature a consistent vertical rhythm, often with a centered stack of content (headline, body, buttons) or multi-column grids for features and data. There's a subtle alternating section pattern, primarily between Canvas White (#ffffff) and Near White (#f7f7f5) backgrounds. Navigation is a sticky top bar with left-aligned branding and right-aligned buttons/links.

## Imagery

Imagery primarily consists of evocative, painted landscape illustrations acting as large background heroes, featuring muted sunrise/sunset tones with soft, organic forms. Product imagery uses tightly cropped, detailed product screenshots or abstract graphics to illustrate concepts, often isolated on clean white backgrounds. Icons are minimal, outlined, monochromatic, and used for functional clarity rather than excessive decoration. The overall density is text-dominant, with imagery serving as atmospheric backdrops or focused explanatory elements.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Card | rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Monochromatic interface with precise typography and subtle elevation, focused on content clarity. |
| Stripe | Clean, understated aesthetic with a disciplined use of typography and a minimalist color palette for UI elements. |
| Amie | Light canvas, highly compact typography, and a deliberate absence of strong chromatic accents in the main UI. |
| Anthropic | Heavy reliance on clean neutrals, sophisticated typography, and minimal use of color to convey authority and seriousness. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #1b0624
primary action: #160f0c (filled action)

Example Component Prompts:
Create a hero section: full-bleed background set to a painted landscape illustration. Centered headline at 72px GT America, Accent Purple (#1b0624), letter-spacing -0.0600em. Subtext at 18px GT America, Subtle Gray (#898683), letter-spacing normal. Primary filled button below subtext: Onyx Button Background (#160f0c), Canvas White (#ffffff) text, 999px radius, 8px vertical 14px horizontal padding.

Create a feature card: Elevated Card with Canvas White (#ffffff) background, 14px radius, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset shadow. Headline at 24px GT America, Midnight Ink (#000000), letter-spacing -0.0300em. Body text at 16px GT America Trial Rg, Deep Charcoal (#292421).

Create a ghost navigation button: Transparent background, Midnight Ink (#000000) text, 1px Midnight Ink (#000000) border, 999px radius, 6px vertical 20px horizontal padding, GT America 400 weight.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508879333-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508879333-thumb.jpg |
