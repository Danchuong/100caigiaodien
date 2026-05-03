# Klarna — Refero Style

- Refero URL: https://styles.refero.design/style/49dba9e1-0d9d-4997-805a-bfea7525252d
- Site URL: https://klarna.com
- ID: 49dba9e1-0d9d-4997-805a-bfea7525252d
- Theme: light
- Industry: fintech
- Created: 2026-03-28T20:47:07.000Z
- Ranks: newest: 984, popular: 317, trending: 553

> Friendly finance. A vibrant pink against deep violet, like a surprising bloom in a nighttime garden.

## Description

This design system feels like a friendly, yet sophisticated, financial advisor — welcoming and trustworthy. It achieves this through a vibrant, playful pink accent ('Bubblegum Pop') against a deep 'Midnight Plum' background in hero sections and a clean, accessible light gray elsewhere. The strategic use of large, rounded corners on buttons ('Pill Button') and cards ('Soft Square Card') softens the interface, making financial tools feel less intimidating. Headline typography is a signature element: 'Klarna Title' at heavy weights creates a bold, almost assertive voice, balanced by the friendly curvature of the other elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Plum | #0b051d | brand | Primary text, prominent page backgrounds (hero), interaction states for links and buttons. It creates a sense of depth and sophistication. |
| Bubblegum Pop | #ffa8cd | brand | Call-to-action buttons, prominent accents, and brand elements. This color provides a high-contrast, energetic focal point against both dark and light backgrounds. |
| Candy Floss | #ffd0e2 | brand | Subtle background accents, often used in smaller blocks or to hint at interactive states. A lighter, softer version of the brand pink. |
| Amethyst | #2c2242 | brand | The darkest of the card background colors, used for a soft, elevated look. |
| Lavender Mist | #aa89f2 | brand | A vibrant card background, suggesting freshness and modernity. |
| Mint Leaf | #e6ffa9 | brand | A bright, energetic card background, adding a touch of playfulness. |
| Off-White Canvas | #f9f8f5 | neutral | Main page background, default card surfaces. Provides a soft, clean base for content. |
| Pure White | #ffffff | neutral | Navigation backgrounds, key content containers, elevated card surfaces. Offers crisp contrast and a sense of lightness. |
| Stone Gray | #e2e2e7 | neutral | Neutral button borders, inactive states, subtle dividers. A soft, light gray for secondary boundaries. |
| Medium Gray | #615f6d | neutral | Secondary text, subtle navigation links, placeholder text in inputs. Provides readability without competing with primary content. |
| Dark Gray | #373544 | neutral | Ghost button text, subtle navigational elements. Offers a slightly darker contrast on light backgrounds. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Klarna Title | Montserrat | 500, 700 | 40px, 41px, 52px, 58px, 90px | 1.05, 1.06, 1.10 | Display headlines and primary section titles. Its heavy weights establish a bold and direct brand voice. |
| Klarna Text | Open Sans | 400, 500, 700 | 14px, 16px, 20px | 1.05, 1.20, 1.30 | Navigation links, input fields, and some subheadings. The custom letter-spacing gives it a unique, open feel. |
| -apple-system |  | 400, 500 | 12px, 14px, 16px, 20px | 1.00, 1.05, 1.14, 1.20, 1.25, 1.43, 1.50 | Body text, captions, and secondary links. Prioritizes system defaults for ubiquitous readability across devices. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.003 |
| body-sm | 14 | 1.43 | -0.003 |
| body | 16 | 1.25 | -0.003 |
| subheading | 20 | 1.25 | -0.003 |
| heading | 40 | 1.14 |  |
| heading-lg | 52 | 1.06 |  |
| display | 90 | 1.05 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "input": "0px",
    "buttons": "100px",
    "pillButtons": "999px"
  },
  "elementGap": "16px",
  "sectionGap": "48px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Payment Options Cards



### Feature Cards Grid



### App Rating & CTA Banner



### Pill Accent Button

**Role:** Primary Call to Action

A 'Bubblegum Pop' (ffa8cd) background with 'Midnight Plum' (0b051d) text. Features strongly rounded corners (100px radius) and padding of 12px vertical, 20px horizontal. This button creates high visual impact and encourages interaction.

### Ghost Border Button

**Role:** Secondary Action

Transparent background with a 'Dark Gray' (373544) border and text. Rounded corners (20px radius) and padding of 8px vertical, 12px horizontal. It offers a subtle action without distracting from primary CTAs.

### Pill Border Button

**Role:** Tertiary / Navigation Action

Transparent background with 'Midnight Plum' (0b051d) text and a 'Stone Gray' (e2e2e7) border, with a fully rounded (`999px`) radius. This button type is used for less prominent actions, like navigation items, offering a clean, modern look.

### Default Card

**Role:** Content Container

Uses 'Off-White Canvas' (f9f8f5) as a background with a 16px border-radius, no shadow. Typically used for feature sections or information blocks, keeping the layout clean and organized.

### Vibrant Card - Amethyst

**Role:** Showcasing Diverse Content

A 'Amethyst' (2c2242) background with a 24px border-radius and a subtle shadow (rgba(0,0,0,0.1) 0px 2px 4px 0px). Padding is consistent at 32px on all sides. Used to visually differentiate various offerings or features, adding depth.

### Vibrant Card - Lavender Mist

**Role:** Showcasing Diverse Content

A 'Lavender Mist' (aa89f2) background with a 24px border-radius and a subtle shadow (rgba(0,0,0,0.1) 0px 2px 4px 0px). Padding is consistent at 32px on all sides. Used to add visual variety and highlight specific content.

### Vibrant Card - Mint Leaf

**Role:** Showcasing Diverse Content

A 'Mint Leaf' (e6ffa9) background with a 24px border-radius and a subtle shadow (rgba(0,0,0,0.1) 0px 2px 4px 0px). Padding is consistent at 32px on all sides. Used for playful or attention-grabbing content blocks.

### Text Input (Default)

**Role:** User Data Entry

Transparent background with 'Medium Gray' (615f6d) text and border. No border-radius. Padding is 8px vertical, 12px horizontal. The stark, unrounded input provides a functional contrast to the softer button and card aesthetics.

## Do's

- Always use 'Midnight Plum' (#0b051d) for primary headings and important text on light backgrounds to maintain brand authority.
- Apply 'Bubblegum Pop' (#ffa8cd) for all primary call-to-action buttons to ensure maximum visibility and encourage clicks.
- Maintain a 100px radius for all CTA buttons and a `999px` radius for tertiary pill buttons to create a consistent soft, approachable aesthetic.
- Utilize 'Off-White Canvas' (#f9f8f5) for main page backgrounds and secondary card surfaces to provide a clean, readable base.
- Employ `Klarna Title` font with weights 500-700 for all large headlines, providing a bold, direct brand voice.
- Use 32px as the standard padding within card components to ensure generous content spacing.

## Don'ts

- Do not use highly saturated colors for large text blocks; reserve them for interactive elements or accents.
- Avoid using hard-edged rectangles for content cards; always feature a 16px or 24px border-radius to maintain approachability.
- Never combine more than three vibrant card background colors (Amethyst, Lavender Mist, Mint Leaf) in close proximity to prevent visual clutter.
- Do not vary letter-spacing for `Klarna Title` or `Klarna Text` unless explicitly defined; use the specified values like `-0.0100em` where applicable.
- Avoid shadows on default content cards; only use the specified subtle shadow (rgba(0,0,0,0.1) 0px 2px 4px 0px) on elevated, vibrant cards.
- Do not use dark backgrounds for main content sections; reserve 'Midnight Plum' for hero or impactful introductory blocks.

## Layout

The layout is primarily max-width contained, centered on the page, creating a structured and focused experience. The hero section is full-bleed, using a dark 'Midnight Plum' background with bold, centered 'Klarna Title' typography on the left and a prominent product visual on the right. Subsequent sections alternate between feature blocks with text-left/image-right or image-left/text-right arrangements. There's a 4-column card grid used for showcasing different service aspects, with each card featuring unique vibrant background colors. The rhythm between sections is consistent, typically separated by 48px, lending a spacious and readable flow. The header is a sticky top navigation bar.

## Imagery

The visual language mixes product-centric photography with abstract, brand-colored graphics. Photography features close-up, cropped shots of a hand holding a mobile phone displaying the Klarna app, with a subtle glow or atmospheric lighting. The treatment is focused on showcasing functionality, not lifestyle. Illustrations use a flat, almost ethereal style, with soft gradients of brand colors. Icons are outlined, simple, and mono-color, typically 'Midnight Plum' on light backgrounds. The density is moderate; imagery serves to illustrate features rather than purely decorate, with a balance between visual elements and descriptive text.

## Elevation

| Element | Style |
| --- | --- |
| Vibrant Card | rgba(0, 0, 0, 0.1) 0px 2px 4px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Apple Pay (some marketing pages) | Shares the use of vibrant, often pastel or saturated, accent colors against clean white or dark backgrounds, promoting a modern and accessible feel. |
| Monzo | Its brand aesthetic also incorporates bold, custom typography and a distinct, playful color palette (hot pink as a primary accent) to make banking feel less formal. |
| Revolut | Utilizes a similar blend of deep, saturated brand colors with clean layouts and strong, geometric typefaces to convey a cutting-edge financial service. |
| Square | Employs clean, high-contrast layouts with rounded UI elements and prominent brand colors to project simplicity and trustworthiness in financial transactions. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #0b051d (Midnight Plum)
- Background: #f9f8f5 (Off-White Canvas)
- CTA: #ffa8cd (Bubblegum Pop)
- Border: #e2e2e7 (Stone Gray)
- Accent: #aa89f2 (Lavender Mist)

### Example Component Prompts
1. Create a primary call-to-action button: text 'Sign Up Now'. Background #ffa8cd, text #0b051d, border-radius 100px, padding 12px vertical 20px horizontal, font Klarna Text weight 500, size 16px, letter-spacing -0.003em.
2. Design a feature card: background #f9f8f5, border-radius 16px, no shadow, padding 32px. Headline 'Easy Payments' (Klarna Title weight 700, size 20px, #0b051d), body text 'Manage your money with flexibility.' (-apple-system weight 400, size 14px, #615f6d).
3. Generate a vibrant information card: background #aa89f2, border-radius 24px, box-shadow rgba(0,0,0,0.1) 0px 2px 4px 0px, padding 32px. Inner content text should be Klarna Text weight 400, size 16px, #0b051d.
4. Produce a Ghost Button: text 'Learn More'. Transparent background, text #373544, border 1px solid #373544, border-radius 20px, padding 8px vertical 12px horizontal, font -apple-system weight 500, size 14px, letter-spacing -0.003em.
5. Create a hero section: full-bleed background #0b051d. Left-aligned headline 'Paga como quieras con Klarna' (Klarna Title weight 700, size 90px, #ffffff). Right-aligned image of a phone displaying the app, visually blended with the dark background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775927560372-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775927560372-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/49dba9e1-0d9d-4997-805a-bfea7525252d-1777568263453-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/49dba9e1-0d9d-4997-805a-bfea7525252d-1777568263453-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/49dba9e1-0d9d-4997-805a-bfea7525252d-1777568263453-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/49dba9e1-0d9d-4997-805a-bfea7525252d-1777568263453-preview-detail-poster.jpg |
