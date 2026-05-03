# Flutterwave Design — Refero Style

- Refero URL: https://styles.refero.design/style/97bbc1bd-873f-4048-b4cc-b20ea2e70097
- Site URL: https://www.flutterwave.design
- ID: 97bbc1bd-873f-4048-b4cc-b20ea2e70097
- Theme: light
- Industry: design
- Created: 2026-04-30T03:38:09.589Z
- Ranks: newest: 105, popular: 1250, trending: 1252

> High-contrast digital artboard

## Description

Flutterwave Design employs a high-contrast, clean canvas aesthetic, featuring bold headlines and a structured layout. The visual design emphasizes readability with dark typography on a predominantly light background, punctuated by a single vivid yellow accent for interactive elements. Imagery is abstract and often uses strong color blocking, contributing to a modern, almost digital-art feel. Components are compact and functional, supporting a dense yet organized information delivery.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Cloud Canvas | #fff9f1 | neutral | Page background, primary surface for content blocks |
| Storm Gray | #171717 | neutral | Primary body text, borders, navigation elements. Provides strong contrast against light surfaces |
| Deep Ink | #12122c | neutral | Headings, prominent text, and specific text elements. This muted violet-black color adds a subtle visual richness without compromising readability |
| Silver Mist | #b5b5b5 | neutral | Secondary background surfaces, muted dividers, subtle card backgrounds |
| Ash Stone | #8b8b8b | neutral | Tertiary background surfaces, hints of background texture |
| Eclipse | #000000 | neutral | Strongest accent for text on buttons and specific icon elements, acting as a true black for maximum definition |
| Marigold Glow | #f5a623 | accent | Primary action background (buttons, certain interactive elements) – a vivid yellow that stands out against the neutral palette |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Moderat | Inter | 400, 500, 600, 700 | 12px, 14px, 16px, 18px, 20px, 22px | 1.18, 1.20, 1.60, 1.63 | Primary body text, links, descriptions, and secondary headings. Its consistent tracking across sizes helps maintain a structured yet legible appearance. |
| Millik | Montserrat | 700, 800 | 32px, 60px | 1.20 | Prominent headings and display text. Its bold weights and tight negative letter-spacing create a confident, assertive visual voice for key messages. |
| Flutterwave | Roboto | 400 | 14px, 16px | 1.20 | Functional text for icons and buttons where space is constrained and a neutral, legible voice is required. Likely a brand-specific utility font. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.18 | -0.432 |
| body-sm | 14 | 1.2 | -0.504 |
| body | 16 | 1.6 | -0.576 |
| subheading | 18 | 1.63 | -0.648 |
| heading-sm | 20 | 1.2 | -0.72 |
| heading | 22 | 1.2 | -0.792 |
| heading-lg | 32 | 1.2 | -0.416 |
| display | 60 | 1.2 | -0.78 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "5px",
    "other": "5px",
    "inputs": "5px",
    "buttons": "5px"
  },
  "elementGap": "10px",
  "sectionGap": "60px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Subscribe Button

**Role:** Primary call-to-action button, featuring a distinct compound radius.

Background: Marigold Glow (#f5a623), Text: Eclipse (#000000). Border Radius: 0px 5px 5px 0px. Padding: 1px 6px. Type: Flutterwave, 16px, weight 400.

### Article Card (Curved Carousel)

**Role:** Display individual articles within a visually engaging, curved hero carousel.

Background: Silver Mist (#b5b5b5) or Storm Gray opaque variations (e.g., rgba(128, 128, 128, 0.58)). Border Radius: 5px. Text: White. No padding on card itself, content is full-bleed to the edge of the card.

### Standard Article Card

**Role:** Display individual articles in a grid layout, focusing on visual clarity and content hierarchy.

Background: Cloud Canvas (#fff9f1). Border Radius: 5px. Title text: Deep Ink (#12122c). Details text: Storm Gray (#171717). Image at top, text content below.

### Subscription Input Field

**Role:** User input field for email subscriptions, paired with a button.

Background: Transparent (rgba(0, 0, 0, 0)), Text: Storm Gray (#171717). Border: 1px Storm Gray (#171717). Border Radius: 5px 0px 0px 5px. Padding: 20px 32px.

## Do's

- Use Cloud Canvas (#fff9f1) as the default page background for sections, ensuring strong contrast with text.
- Apply a consistent 5px border radius to all interactive elements, cards, and input fields for a soft, unified edge treatment.
- Utilize Millik (700-800 weight) with tight letter-spacing for all primary headings, reinforcing a bold and confident tone.
- Reserve Marigold Glow (#f5a623) exclusively for primary action backgrounds, making calls-to-action highly visible.
- Maintain a clear visual hierarchy by rendering primary body text in Storm Gray (#171717) and headings in Deep Ink (#12122c), both on Cloud Canvas backgrounds.

## Don'ts

- Avoid using highly saturated colors for large background areas; maintain a light, neutral canvas.
- Do not deviate from the specified negative letter-spacing for Millik headings, as this is a key typographic characteristic.
- Do not use Marigold Glow (#f5a623) for text or borders; it is strictly an action background color.
- Do not introduce heavy shadows or gradients; rely on color contrast and subtle surface variations for depth.
- Do not use generic system fonts; stick to Moderat, Millik, and Flutterwave for a consistent brand voice.

## Layout

The page primarily employs a max-width contained layout, likely around 1200-1400px, but with notable full-bleed sections, particularly the hero. The hero section features a prominent centered headline over a background that integrates a visually dynamic, curved carousel of content cards, creating a sense of movement and depth. Vertical rhythm is established through consistent section gaps, creating distinct content blocks. Content arrangement often utilizes a 3-column card grid for 'Latest Stories' and 'Vibes' sections, which balances visual information. Navigation is a simple top bar with left-aligned branding and right-aligned text links. Overall, the layout feels spacious yet structured, using strong visual sections to guide the user.

## Imagery

Imagery primarily consists of abstract, often colorful illustrations with strong graphic qualities. These visuals use broad color blocking and clean lines, creating a digital-art aesthetic rather than realistic depictions. Photography, if present, is usually tightly cropped and product-focused without lifestyle context. Icons are typically solid or filled, with a medium stroke weight where outlines exist, often using neutral colors or subtle brand accents. The role of imagery is decorative and atmospheric, contributing heavily to the brand's visual identity, often serving as visual anchors within content blocks or as hero elements. Density is moderate, with images typically contained within defined areas, complementing text rather than dominating the layout.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | High-contrast text on light backgrounds, strong reliance on geometric typefaces with subtle color accents. |
| Figma | Clean interface with emphasis on readability, a distinct, well-defined typographic hierarchy, and illustrative visual language. |
| Linear | Compact layout for content, distinctive header typography and negative letter-spacing, using subtle neutrals for backgrounds and borders. |
| Vercel | Dominant light mode, strong type choices, and a preference for abstract or technical illustrations rather than photography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #171717
background: #fff9f1
border: #171717
accent: #12122c
primary action: #f5a623 (filled action)

Example Component Prompts:
1. Create a hero section: Cloud Canvas (#fff9f1) background. Headline 'Hello! 👋🏾 We’re the Flutterwave Design team' in Millik, 60px, weight 800, Deep Ink (#12122c), letter-spacing -0.78px. Body text 'We are the designers at Flutterwave...' in Moderat, 18px, weight 400, Storm Gray (#171717), letter-spacing -0.648px.
2. Create a 'Subscribe' input block: Input field with transparent background rgba(0,0,0,0), Storm Gray (#171717) text at 16px Moderat, 1px Storm Gray (#171717) border, 5px 0px 0px 5px radius, 20px 32px padding. Paired with a button right next to it: Marigold Glow (#f5a623) background, Eclipse (#000000) text for 'Subscribe', 0px 5px 5px 0px radius, 1px 6px padding, Flutterwave font.
3. Create a standard article card: Cloud Canvas (#fff9f1) prominent background. Outer border radius 5px. Headline in Deep Ink (#12122c) at 22px Moderat, weight 600. Helper text 'By Author Name' below in Storm Gray (#171717) at 14px Moderat, weight 400.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520269378-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520269378-thumb.jpg |
