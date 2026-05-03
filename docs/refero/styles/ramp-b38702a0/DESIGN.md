# Ramp — Refero Style

- Refero URL: https://styles.refero.design/style/b38702a0-75ab-474c-9106-00b624535825
- Site URL: https://ramp.com
- ID: b38702a0-75ab-474c-9106-00b624535825
- Theme: dark
- Industry: fintech
- Created: 2026-03-27T15:59:12.000Z
- Ranks: newest: 992, popular: 77, trending: 59

> Deep Ocean Command Center – a stark, high-contrast control panel set against an endless dark expanse.

## Description

The Ramp design system evokes the precision and quiet authority of a financial control panel operating in a deep ocean environment. Its foundation is a dark theme, utilizing a rich `#0c0a08` background and surfaces that progressively lighten to reveal hierarchy, like submerged objects reflecting distant light. Typography, primarily Lausanne, sets a technical yet approachable tone with its clean geometry and a prominent use of 'ss01' font feature, ensuring figures and characters align perfectly. Vibrant yellow accents (`#e4f222`) serve as critical interaction indicators, cutting through the deep blue and near-black neutrals like sonar beacons, guiding the user through complex financial interfaces.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Space Black | #0c0a08 | neutral | Primary page background, base surface for components — establishes the dark theme depth. |
| Pure White | #ffffff | neutral | Primary text color, crucial for high contrast readability against dark backgrounds, interactive element text. |
| Ash Gray | #1a1919 | neutral | Secondary surface background, used for lifted cards or subtle section breaks against the primary background. |
| Charcoal Black | #000000 | neutral | Illustrative elements, icons, and occasionally deeper backgrounds for visual breaks. |
| Ivory White | #f4f2f0 | neutral | Alternate background for specific white-themed cards or content sections, offering high contrast to deep blacks. |
| Slate Gray | #999ba3 | neutral | Subtle text, inactive states, faint borders, and muted icons. |
| Iron Gray | #4d505d | neutral | Input field borders, secondary structural elements. |
| Midnight Ink | #010412 | neutral | Subtle shadow color, creating depth on dark surfaces without being stark. |
| Ocean Abyss | #0b0d1b | neutral | Darkest button backgrounds, creating a sense of subtle elevation within the dark theme. |
| Silver Mist | #d2cecb | neutral | Light borders and dividers for cards and sections on lighter neutral backgrounds. |
| Sunbeam Yellow | #e4f222 | accent | Primary calls to action, active navigation indicators, and key interactive elements. Provides strong visual focus. |
| Emerald Green | #00d638 | semantic | Success states, positive indicators, and specific illustrative elements. |
| Deep Sea Blue | #5683d2 | brand | Link text, informational elements, and subtle brand accents. |
| Electric Blue | #0066ff | brand | Interactive elements, graphical accents with high visibility. |
| Blaze Orange | #ff492c | semantic | Highlighting specific features or drawing attention to warnings. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| lausanne | system-ui, sans-serif | 400, 500 | 10px, 13px, 14px, 16px, 18px, 20px, 24px, 28px, 40px, 48px, 64px | 0.74, 1.00, 1.04, 1.05, 1.14, 1.17, 1.20, 1.30, 1.33, 1.38, 1.43, 1.46, 1.50, 1.60 | Primary typeface for all UI text, headings, body, and interactive elements. Its custom 'ss01' feature implies a focus on numerical precision and aligned tabular data, critical for a financial platform. |
| Arial | sans-serif | 400 | 14px | 1.20 | Fallback typeface, used sparingly for specific legacy content or embedded imagery text, ensures broad compatibility. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 |  |
| subheading | 18 | 1.38 |  |
| heading-sm | 24 | 1.33 |  |
| heading | 40 | 1.17 |  |
| heading-lg | 48 | 1.14 |  |
| display | 64 | 1.05 |  |

## Spacing & Shape

```json
{
  "radius": {
    "nav": "4px",
    "cards": "12px",
    "input": "10px",
    "buttons": "4px",
    "default": "12px"
  },
  "elementGap": "8px",
  "sectionGap": "24px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Call to Action Button

**Role:** Interactive

Filled with Sunbeam Yellow (`#e4f222`), text in Deep Space Black (`#0c0a08`), 6px border-radius, 10px vertical and 20px horizontal padding. This button is for primary actions and immediately draws attention.

### Secondary Ghost Button

**Role:** Interactive

Transparent background, text in Pure White (`#ffffff`), 6px border-radius, 10px vertical and 20px horizontal padding. Used for less prominent actions, maintaining visual hierarchy on dark backgrounds.

### Text Link Button

**Role:** Interactive

Transparent background, text in Pure White (`#ffffff`), no border-radius or padding. Used for inline or subtle actions where minimal visual weight is desired.

### Dark Filled Button

**Role:** Interactive

Filled with Ocean Abyss (`#0b0d1b`), text in Pure White (`#ffffff`), 6px border-radius, 16px all-around padding. Provides a high-contrast interaction button on lighter neutral areas.

### Product Feature Card

**Role:** Display

Background in Ivory White (`#f4f2f0`), 12px border-radius, no box shadow, 0px padding. Used for showcasing product features in a clean, contained block.

### Dark Marketing Card

**Role:** Display

Background in Ocean Abyss (`#0b0d1b`), 12px border-radius, no box shadow, 0px padding. Used for marketing content, offering deep contrast.

### Testimonial Card

**Role:** Display

Background in translucent black (`rgba(33, 33, 33, 0.024)`) on a dark background, 12px border-radius, no box shadow, 0px padding. For displaying social proof or customer stories.

### Outline Card

**Role:** Display

Transparent background, 0px border-radius, 32px vertical and 24px horizontal padding. Used for structural grouping with visible content, without adding a solid background.

### Input Field - Dark Background

**Role:** Interactive

Transparent background, text in Pure White (`#ffffff`), 10px border-radius, 16px horizontal padding. Placeholders are in Slate Gray (`#999ba3`). Used on dark page sections.

### Input Field - Light Background

**Role:** Interactive

Transparent background, text in Deep Space Black (`#0c0a08`), border in translucent black (`rgba(33, 33, 33, 0.1)`), 10px border-radius, 16px horizontal padding. Used on lighter page sections.

### Input Field - Focused/Active

**Role:** Interactive

Transparent background, text in Pure White (`#ffffff`), border in translucent white (`rgba(255, 255, 255, 0.3)`), 10px border-radius, 16px horizontal padding. Indicates active user input field.

## Do's

- Prioritize text legibility by using Pure White (`#ffffff`) for primary text on Deep Space Black (`#0c0a08`) or Ocean Abyss (`#0b0d1b`) backgrounds.
- Use Sunbeam Yellow (`#e4f222`) exclusively for primary call-to-action buttons and active navigation states to clearly signal interaction points.
- Apply 12px border-radius to all cards and larger container elements for a consistent soft-edged feel.
- Maintain a clear visual hierarchy by utilizing the surface progression: Deep Space Black (`#0c0a08`) for canvas, Ash Gray (`#1a1919`) for elevated cards, and Ocean Abyss (`#0b0d1b`) for interactive elements on dark backgrounds.
- Ensure headings use the 'lausanne' font with its 'ss01' font feature for precise number and character alignment, crucial for financial data.
- Use 8px as the default `elementGap` for consistent spacing between UI elements, reserving smaller increments for fine-tuning dense interfaces.
- For all navigation and buttons, apply a 4px border-radius to create a distinct, slightly softer interaction target.

## Don'ts

- Do not use Sunbeam Yellow (`#e4f222`) for decorative purposes or non-interactive elements, as it dilutes its primary CTA role.
- Avoid arbitrary color choices; every color must map to a defined role within the palette to maintain cohesion.
- Do not introduce new shadow styles; adhere to the subtle inset white shadow (`rgba(255, 255, 255, 0.6) 0px 0px 2px 0px inset`) for nav and the default no shadows for cards.
- Do not use generic system fonts for primary UI text; always prefer 'lausanne' with its 'ss01' feature for brand consistency and precision.
- Avoid varying component padding; stick to the specified padding for buttons (e.g., 10px vertical, 20px horizontal) and cards (e.g., 24px for outlined cards) to maintain rhythmic spacing.
- Do not use pure black (`#000000`) for extensive text; reserve it for illustrative elements or very specific, high-contrast contexts.

## Imagery

The site heavily relies on product screenshots and 3D renders. Product screenshots are typically high-fidelity UI captures, often shown on modern devices (laptops, phones) with a clean, focused presentation. 3D renders feature abstract shapes or physical representations of credit cards, using monochromatic or deep-toned palettes that align with the dark theme. Photography is present in customer testimonial sections, showing professionals in office environments, often within a card-like container with rounded corners and muted or natural lighting. Iconography is generally outlined, monochromatic (white on dark, dark on light), with a consistent stroke weight, and serves primarily to explain features rather than purely decorate. The overall density of imagery is balanced, with large hero visuals and then smaller, contained images within feature sections.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a sophisticated, dark-themed UI with geometric typography and a focus on financial tools and data visualization, using subtle shifts in dark neutrals for hierarchy. |
| Brex | Employs a similar modern fintech aesthetic with an emphasis on corporate spend management, utilizing clear, functional typography, and strong accent colors against a generally neutral palette. |
| Mercury | Features a dark-themed digital banking interface, with a minimalist approach, strong use of custom typography, and clear calls to action, akin to Ramp's precise data presentation. |
| Linear | While not fintech, it shares a deep dark mode aesthetic, very precise and compact UI elements, and a focus on efficiency and tool-like interaction, which aligns with Ramp's functional clarity. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Primary Text: `#ffffff` (Pure White)
- Page Background: `#0c0a08` (Deep Space Black)
- Primary CTA: `#e4f222` (Sunbeam Yellow)
- Input Border: `#4d505d` (Iron Gray)
- Link Text: `#5683d2` (Deep Sea Blue)

### Example Component Prompts
1. Create a hero section: Full-bleed Deep Space Black background. Headline 'Time is money. Save both.' using 'lausanne' font, 64px, weight 500, Pure White text, line-height 1.05. Subtext 'Easy-to-use corporate cards...' uses 'lausanne' 18px, weight 400, Pure White. Primary button 'Get started for free' is Sunbeam Yellow (`#e4f222`), text Deep Space Black (`#0c0a08`), 6px border-radius, 10px vertical 20px horizontal padding. Input field 'What's your work email?' has transparent background, Pure White text, Iron Gray border, 10px border-radius, 16px horizontal padding.
2. Design a feature card: Use Ivory White (`#f4f2f0`) for the background, 12px border-radius. Headline 'Ramp Intelligence' using 'lausanne' 24px, weight 500, Deep Space Black text. Accent text 'Put Ramp AI to work for you.' using 'lausanne' 14px, weight 400, Deep Space Black. Include a 'Learn more' link in Deep Sea Blue (`#5683d2`). Card padding 0px.
3. Implement a navigation bar: Sticky, 62px height, Deep Space Black background. Logo text 'ramp' in Pure White. Navigation links 'Products', 'Solutions' in Pure White, 'lausanne' 14px, weight 400. 'Sign in' button as transparent background, Pure White text, 6px border-radius, 10px vertical 20px horizontal padding. 'See a demo' button as Sunbeam Yellow (`#e4f222`) background, Deep Space Black text, 6px border-radius, 10px vertical 20px horizontal padding. Apply inset shadow `rgba(255, 255, 255, 0.6) 0px 0px 2px 0px inset`.
4. Construct a testimonial card within a horizontal carousel: Background `rgba(33, 33, 33, 0.024)`, 12px border-radius. Inner padding 32px vertical, 24px horizontal. Text 'Ramp is the only vendor...' in Pure White, 'lausanne' 16px, weight 400. Name 'Brandon Zell' in Pure White, 'lausanne' 14px, weight 500. Include a 'Read customer story' link in Deep Sea Blue (`#5683d2`).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776118974795-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776118974795-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b38702a0-75ab-474c-9106-00b624535825-1777568656929-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b38702a0-75ab-474c-9106-00b624535825-1777568656929-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b38702a0-75ab-474c-9106-00b624535825-1777568656929-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b38702a0-75ab-474c-9106-00b624535825-1777568656929-preview-detail-poster.jpg |
