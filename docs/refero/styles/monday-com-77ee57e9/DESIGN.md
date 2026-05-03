# monday.com — Refero Style

- Refero URL: https://styles.refero.design/style/77ee57e9-9f8e-4ec1-93f7-cc1c4b84307a
- Site URL: https://monday.com
- ID: 77ee57e9-9f8e-4ec1-93f7-cc1c4b84307a
- Theme: light
- Industry: saas
- Created: 2026-02-24T18:48:07.000Z
- Ranks: newest: 1134, popular: 242, trending: 247

> Vibrant organized workspace — like a digital desk splashed with colorful sticky notes and neatly arranged tools.

## Description

This design system feels like a vibrant, organized digital workspace, balancing playful accents with robust functionality. It uses a very accessible light theme with high-contrast text and a central, vivid violet (#6161ff) to draw attention to primary actions. The abundant use of color, especially in product card backgrounds, creates a rich and dynamic interface, while rounded elements (160px pill buttons, 24px cards) soften the structured grid layout. A diverse set of gradients adds energetic flair and a sense of continuous motion.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Text Primary | #333333 | neutral | Primary text for headings, body copy, and form inputs. Provides strong contrast against light backgrounds. |
| Text Muted | #676879 | neutral | Secondary text for less prominent information, metadata, and icons. Offers a softer visual presence. |
| Canvas Background | #ffffff | neutral | The foundational background color for the overall page and elevated surfaces. |
| Surface Accent | #f5f6f8 | neutral | Background for cards, badges, and subtle section differentiation; a soft, near-white neutral. |
| Interactive Violet | #6161ff | brand | Primary action buttons, interactive elements, and key brand highlights. Its vivid saturation ensures visibility and draws the eye. |
| Outline Ebony | #000000 | neutral | Border color for outlined buttons and subtle UI elements. Acts as a strong, grounding outline. |
| Border Silver | #d0d4e4 | neutral | Subtle borders for cards and other structural elements, providing definition without harshness. |
| Interactive Graphite | #535768 | neutral | Text color for navigation, links, and specific interactive elements. Provides contrast while maintaining a modern, desaturated feel. |
| Card Mint | #bcfe90 | accent | Observed in card backgroundColor. |
| Card Lavender | #eddff7 | accent | Observed in card backgroundColor. |
| Card Sky | #abf0ff | accent | Observed in card backgroundColor. |
| Card Sunset | #ff8940 | accent | Observed in card backgroundColor. |
| Card Pale Blue | #e7ecff | accent | A very light, almost white blue background used for subtle card differentiation. |
| Card Ocean | #93beff | accent | Observed in card backgroundColor. |
| Card Ice | #d1faff | accent | A very light, cool blue background for cards, almost white but with a clear cool tint. |
| Button Indigo | #9450fd | accent | Alternative button background for showcasing varied product or feature categories. |
| Button Sky | #3ac9ff | accent | Alternative button background for showcasing varied product or feature categories. |
| Button Teal | #2a5c40 | accent | Supporting palette color with insufficient usage evidence for a stronger role. Extracted usage does not support a distinct primary control color. |
| Badge Light Blue | #dbdbff | accent | Background for feature badges, providing a light, cheerful indicator. |
| Gradient Vibrant Flow | #fe81e4 | accent | Decorative gradient for dynamic visual elements, shifting from hot pink to warm orange. |
| Gradient Spectrum Ring | #8181ff | accent | Conic gradient for circular or radial elements, creating a multi-color animated-gif-like effect. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Poppins | sans-serif | 300, 400, 500, 700 | 8px, 12px, 13px, 14px, 16px, 18px, 20px, 22px, 24px, 28px, 32px, 36px, 40px, 48px, 52px, 56px, 64px | 1.15, 1.20, 1.30, 1.31, 1.40, 1.45, 1.50, 1.60, 1.69, 2.00, 2.29, 2.46 | The primary typeface for all text content. Its clean, geometric forms maintain readability across various sizes while its multiple weights (from light 300 to bold 700) support a full typographic hierarchy. The tight negative letter-spacing on larger headlines creates a modern, cohesive feel, while normal spacing is used for body text. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.5 |  |
| body | 18 | 1.5 |  |
| body-lg | 22 | 1.5 |  |
| heading-sm | 28 | 1.3 |  |
| heading | 32 | 1.3 |  |
| heading-lg | 40 | 1.3 |  |
| display-sm | 52 | 1.3 |  |
| display | 64 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "24px",
    "input": "0px",
    "badges": "6px",
    "images": "12px",
    "buttons": "160px",
    "general": "6px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Call to Action Button

**Role:** Interactive Element

Buttons are filled with 'Interactive Violet' (#6161ff) and have 'Canvas Background' (#ffffff) text, with a generous 160px border-radius creating a pill shape. Padding is 13px vertical and 24px horizontal. Text is Poppins 16px.

### Outlined Call to Action Button

**Role:** Interactive Element

Buttons are transparent with an 'Outline Ebony' (#000000) border, 'Text Primary' (#333333) text, and a 160px border-radius producing a pill shape. Padding is 13px vertical and 24px horizontal. Text is Poppins 16px.

### Text Link Button

**Role:** Interactive Element

Buttons are transparent with 'Text Primary' (#333333) text and no explicit border-radius. These are used for inline or subtly presented actions.

### Feature Card

**Role:** Content Display

Cards have a 'Canvas Background' (#ffffff) and a 24px border-radius. They are elevated with a soft shadow at rgba(205, 208, 223, 0.4) 0px 2px 48px 0px. Internal padding is 24px.

### Basic Card

**Role:** Content Display

Cards have a transparent background with 0px border-radius and no shadow, used for grouping content without strong visual separation. Internal padding is 24px.

### Accent Background Card

**Role:** Content Display

Cards often use varying 'accent' background colors like 'Card Lavender' (#eddff7) or 'Card Mint' (#bcfe90), with 0px border-radius and no shadow to highlight specific content blocks. Internal padding is 24px.

### Input Field

**Role:** Data Entry

Input fields have a 'Canvas Background' (#ffffff), 'Text Primary' (#333333) text, and 'Text Primary' (#333333) border color with 0px border-radius. Padding is 24px vertical on left/right and 40px left/right. Text is Poppins 22px.

### Informational Badge

**Role:** Categorization/Tagging

Badges have a transparent background with 'Text Primary' (#333333) text and minimal 4px 8px padding. Border radius is 5.6px.

### Feature Category Badge

**Role:** Categorization/Tagging

Badges have a 'Surface Accent' (#f5f6f8) background with 'Text Primary' (#333333) text. Border-radius is 12px and padding is 16px vertical and 28px left/16px right.

## Do's

- Do use 'Interactive Violet' (#6161ff) for primary call-to-action buttons, ensuring text is 'Canvas Background' (#ffffff).
- Do apply a 160px border-radius to all buttons to create a consistent pill shape.
- Do use Poppins 20px, weight 700 with -0.015em letter spacing for major section headings to maintain legibility and impact.
- Do utilize the specific accent colors like 'Card Mint' (#bcfe90) and 'Card Sky' (#abf0ff) as backgrounds for feature cards to add visual variety and categorization.
- Do ensure interactive elements use 'Interactive Graphite' (#535768) for text and 'Border Silver' (#d0d4e4) for subtle borders in neutral states.
- Do apply the rgba(205, 208, 223, 0.4) 0px 2px 48px 0px shadow for elevated cards to create clear visual hierarchy.
- Do employ 'elementGap' at 8px for consistent spacing between inline and block elements.

## Don'ts

- Don't use any color other than 'Interactive Violet' (#6161ff) for primary CTA button backgrounds; use outlined or text variants for secondary actions.
- Don't use square buttons or cards; maintain the established 160px or 24px border-radii for interactive and content elements respectively.
- Don't deviate from Poppins for any text element; other fonts will appear off-brand.
- Don't overcrowd sections; maintain a minimum 'sectionGap' of 48px between major content blocks.
- Don't introduce new shadow values; use the established rgba(205, 208, 223, 0.4) 0px 2px 48px 0px for elevation or no shadow for flat elements.
- Don't center align body text; prefer left alignment with 'Text Primary' (#333333) for optimal readability.

## Layout

The page exhibits a max-width contained layout, though specific hero sections can span full-width. The hero section often features a centered headline over a subtle background, with primary actions prominently in the center. Content sections alternate between visually distinct blocks, often with a consistent vertical rhythm. Many sections employ a 2-column or 3-column grid for features, cards, and interactive elements. The overall density is comfortable, ensuring sufficient breathing room around content blocks, with 48px section gaps providing clear visual breaks. Navigation elements are consistently at the top, often sticky, simplifying user flow.

## Imagery

The site uses a mix of subtle product screenshots, abstract gradient graphics, and simple icons. Product screenshots are often blurred or contained within a UI mock-up, suggesting functionality without being overly detailed. Abstract graphics, particularly those incorporating the vibrant gradients, serve a decorative and energetic purpose, often as background elements or subtle accents. Icons are generally minimalist, often outlined or mono-color, appearing both within the UI for navigation/features and as more decorative elements. The overall language is high-tech playful, with visuals serving to energize rather than explicitly demonstrate.

## Elevation

| Element | Style |
| --- | --- |
| Feature Card | rgba(205, 208, 223, 0.4) 0px 2px 48px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Airtable | Shares a vibrant, color-rich UI on a light background, emphasizing playful productivity with distinct accent colors for data categorization and interactive elements. |
| Notion | Employs clean, rounded UI elements and a focus on high-contrast text on a light canvas, paired with a subtle use of color for functional elements like tags and status. |
| Asana | Features a similar use of distinct, saturated colors for task and project categorization, balanced with a largely neutral interface and soft, legible typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #333333
background: #ffffff
border: #d0d4e4
accent: #6161ff
primary action: #6161ff (filled action)

Example Component Prompts:
1. Create a Primary Call to Action Button: 'Interactive Violet' (#6161ff) background, 'Canvas Background' (#ffffff) text, 160px border-radius, Poppins 16px weight 500, 13px vertical and 24px horizontal padding. Content: 'Get Started'.
2. Create a Feature Card: 'Canvas Background' (#ffffff) background, 24px border-radius, shadow: rgba(205, 208, 223, 0.4) 0px 2px 48px 0px, 24px internal padding. Headline: Poppins 24px weight 700 'Text Primary' (#333333). Body text: Poppins 16px weight 400 'Text Primary' (#333333).
3. Create an Input Field: 'Canvas Background' (#ffffff) background, 'Text Primary' (#333333) text, 'Text Primary' (#333333) border color, 0px border-radius, Poppins 22px weight 400, 24px vertical and 40px left/right padding. Placeholder text: Poppins 22px weight 400 'Text Muted' (#676879).
4. Create a Feature Category Badge: 'Surface Accent' (#f5f6f8) background, 'Text Primary' (#333333) text, 12px border-radius, Poppins 16px weight 500, 16px vertical and 16px/28px horizontal padding. Content: 'Projects & Tasks'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777421214010-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777421214010-thumb.jpg |
