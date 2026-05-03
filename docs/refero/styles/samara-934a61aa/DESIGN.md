# Samara — Refero Style

- Refero URL: https://styles.refero.design/style/934a61aa-50ff-4e90-852b-4ad0b8262d54
- Site URL: https://samara.com
- ID: 934a61aa-50ff-4e90-852b-4ad0b8262d54
- Theme: light
- Industry: agency
- Created: 2026-03-05T09:29:27.000Z
- Ranks: newest: 1092, popular: 176, trending: 505

> Sunlit architectural model. The design combines the precision of a blueprint with the warmth and airiness of natural light.

## Description

The design feels like an architectural plan rendered on warm, premium paper. It establishes authority through restraint, using vast negative space and a whisper-thin display font (Regola Light) for headlines, making them feel expansive and considered rather than loud. The palette is strictly controlled: a warm off-white (#fdfdf7) background, black ink for text, and a single, vibrant Sky Blue (#0096f7) for all primary actions. This creates a calm, focused environment where the product—modern, livable spaces—is the hero. Soft 12px radii on cards and buttons provide a touch of organic friendliness to the otherwise precise, geometric typography.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Sky Blue | #0096f7 | brand | Primary CTAs, interactive links, iconography — a single point of vivid color signifying action. |
| Signal Orange | #ff4000 | accent | Secondary high-visibility CTAs, often used in dark contexts for urgent calls to action. |
| Ink | #000000 | neutral | Headlines, body text, UI labels. |
| Pure White | #ffffff | neutral | Text on dark or colored backgrounds, button text. |
| Parchment | #fdfdf7 | neutral | Primary page background, giving a warm, tactile feel. |
| Warm Sand | #f5f2de | neutral | Card backgrounds. |
| Driftwood | #e7e3e1 | neutral | Button surfaces for secondary or tertiary actions. |
| Ash | #d3d3d3 | neutral | Decorative elements, disabled states. |
| Stone | #999999 | neutral | Subtle borders, placeholder text. |
| Graphite | #666666 | neutral | Secondary text, metadata. |
| Evergreen | #375033 | accent | Product visualization accents within text blocks. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| regola | Plus Jakarta Sans, Manrope | 400 (aliased as 'light', 'book', 'regular') | 12px, 13px, 14px, 15px, 16px, 18px, 21px, 23px, 29px, 30px, 36px, 43px, 48px, 60px, 96px | 0.90, 0.96, 1.00, 1.10, 1.12, 1.14, 1.16, 1.20, 1.25, 1.28, 1.33, 1.49, 1.50, 1.60 | The signature font for the entire system. The 'light' variant is used for large, airy headlines, creating a distinctive look of understated confidence. 'Book' and 'regular' weights are for body copy and UI text. Tight negative letter-spacing is applied at larger sizes, enhancing its geometric precision. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption-sm | 12 | 1.5 | -0.48 |
| caption | 14 | 1.5 | -0.56 |
| body-sm | 16 | 1.49 | -0.22 |
| body | 18 | 1.33 | -0.18 |
| body-lg | 23 | 1.25 | -0.46 |
| subheading | 30 | 1.14 | -0.9 |
| heading-sm | 36 | 1.1 | -0.5 |
| heading | 48 | 1 | -1.3 |
| heading-lg | 60 | 0.96 | -2.46 |
| display | 96 | 0.9 | -4.51 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "pills": "24px",
    "inputs": "12px",
    "buttons": "12px",
    "specialtyCards": "18px"
  },
  "elementGap": "",
  "sectionGap": "",
  "cardPadding": "",
  "pageMaxWidth": "1280px"
}
```

## Components

### Alert Banner



### Button Group



### Model Feature Card



### Primary Button

**Role:** The main call-to-action button.

Background: #0096f7 (Sky Blue). Text: #ffffff (Pure White). Padding: 14px. Radius: 12px. Font: regola, 14-15px.

### Urgent CTA Button

**Role:** A high-contrast call-to-action for dark headers.

Background: #ff4000 (Signal Orange). Text: #ffffff (Pure White). Padding: ~8px 18px. Radius: 12px.

### Pill Ghost Button

**Role:** A subtle, secondary action link styled as a button.

Background: rgba(0, 0, 0, 0.04). Text: #000000 (Ink). Radius: 24px. Padding may vary, often used for text links.

### Standard Card

**Role:** Default content container for features or testimonials.

Background: #f7f7f0 (darker Parchment). Radius: 12px. Shadow: `rgba(0, 0, 0, 0.2) 0px 2px 4px 0px`. Contains its own padded content.

### Warm Sand Card

**Role:** A warmer, more prominent card variant.

Background: #f5f2de (Warm Sand). Radius: 18px. Shadow: `rgba(0, 0, 0, 0.12) 0px 0.5px 2px 0px`. Padding: 36px.

### Text Input Field

**Role:** Standard user input field.

Background: rgba(0, 0, 0, 0.03). Border: 1px solid rgba(0, 0, 0, 0.1). Radius: 12px. Padding: 15px. Text: #000000 (Ink).

### Hero Banner

**Role:** The top-of-page introduction, transitioning on scroll.

Initial state: Black (#000000) background with white text and a Sky Blue or Signal Orange CTA. Scrolls to a transparent or white background integrated with the main page content.

### Inline-Render Headline

**Role:** A signature component mixing large text with small 3D product renders.

Uses `display` or `heading-lg` typography with small, floating product models (e.g., houses) interspersed within the text flow, creating a dynamic, informational headline.

## Do's

- Use `regola-light` with tight negative letter-spacing for all headlines above 30px.
- Set the primary page background to #fdfdf7 (Parchment), never pure #ffffff.
- Reserve the vibrant #0096f7 (Sky Blue) for primary interactive elements like CTAs and links.
- Apply a consistent 12px border-radius to almost all buttons, inputs, and cards.
- Employ generous whitespace (96px-120px) between major content sections.
- Use subtle, short shadows like `rgba(0, 0, 0, 0.12) 0px 0.5px 2px 0px` to gently lift elements.
- Mix large, airy typography with high-quality product photography and clean 3D renders.

## Don'ts

- Don't use pure white (#ffffff) for large background areas.
- Don't use bold or heavy font weights for headlines; use size and light weight instead.
- Don't use sharp 0px corners on primary UI components like buttons and cards.
- Don't use a busy color palette; stick to the core Parchment/Ink/Sky Blue system.
- Don't use strong, deep, or colored shadows.
- Don't neglect typography details; specific letter-spacing and line-height values are critical.
- Don't place elements close together; the design relies on spaciousness.

## Layout

The layout is built on a centered, max-width container of approximately 1280px, creating generous white space on either side. The page begins with a full-bleed hero image or a dark banner with overlaid text, transitioning to a vertical stack of content sections on the warm Parchment background. Section breaks are defined by large vertical gaps (96-120px) rather than visual dividers, creating a calm, unhurried rhythm. Content is arranged in simple, centered 1-column stacks for narrative and 2- or 3-column grids for feature breakdowns.

## Imagery

The visual language is a dichotomy of warm aspiration and clean objectivity. Product photography is dominant, featuring the homes in bright, natural, sunlit environments, often surrounded by nature to evoke a feeling of peaceful, premium living. This is contrasted with clean, isolated 3D product renders embedded directly within text blocks, which serve to explain features with technical clarity. All imagery is contained within sharp-edged containers or cards with a soft 12px radius; there are no abstract or decorative graphics.

## Elevation

| Element | Style |
| --- | --- |
| Subtle Card/Button | rgba(0, 0, 0, 0.12) 0px 0.5px 2px 0px |
| Elevated Card | rgba(0, 0, 0, 0.2) 0px 2px 4px 0px |
| Hover/Active Interaction | rgba(0, 0, 0, 0.08) 0px 2px 10px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Oura | Similar use of a custom geometric sans-serif, spacious light UI, and a focus on premium hardware. |
| Tonal | Combines high-end hardware with a clean, tech-forward aesthetic and typographic precision. |
| Anyone | Shares the architectural, minimalist aesthetic with an emphasis on structure and form. |
| Rivian | Mixes hardware innovation with a clean, adventurous, and nature-adjacent visual language. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Background**: `#fdfdf7` (Parchment)
- **Text**: `#000000` (Ink)
- **Primary CTA**: `#0096f7` (Sky Blue)
- **Card Background**: `#f5f2de` (Warm Sand)
- **Border**: `rgba(0, 0, 0, 0.1)` (Black 10%)

### Example Component Prompts
1. **Primary Button:** "Create a button with text 'Design yours'. Use background color #0096f7, white text, 12px border radius, and 14px padding all around. Use a 15px regola font."
2. **Display Headline:** "Create a headline 'Small living, supersized.' using the regola font at 96px size, weight 400 (light), color #000000, line-height 0.9, and letter-spacing -4.51px."
3. **Content Card:** "Create a card with a background color of #f5f2de, a 18px border radius, and a subtle shadow of `rgba(0, 0, 0, 0.12) 0px 0.5px 2px 0px`. Add 36px of padding inside the card."
4. **Hero Section:** "Generate a hero section. Full width dark banner with background #000000. It contains a centered headline 'Support for homeowners' in white text, 36px regola font, and a call-to-action button next to it. The button text is 'Find out more' on a #ff4000 background with white text and a 12px radius."

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929928220-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929928220-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/934a61aa-50ff-4e90-852b-4ad0b8262d54-1777559727921-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/934a61aa-50ff-4e90-852b-4ad0b8262d54-1777559727921-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/934a61aa-50ff-4e90-852b-4ad0b8262d54-1777559727921-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/934a61aa-50ff-4e90-852b-4ad0b8262d54-1777559727921-preview-detail-poster.jpg |
